<?php
require_once(__DIR__."/../assets/vendor/mail/PHPMailerAutoload.php");

function SendEmail($to, $name, $subject, $body, $CONFIG_MAILER_PASSWORD)
{
    //SMTP Settings
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPDebug    =    0;
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "base64";

    $mail->SMTPSecure = 'ssl';
    $mail->Port    =    "465";
    $mail->Host    =    "ssl://smtp.gmail.com";
    $mail->SMTPAuth    =    true;

    $mail->Username    =    "do-not-reply@justcomz.com";
    $mail->Password    =    $CONFIG_MAILER_PASSWORD;

    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->MsgHTML($body);

    $mail->addAddress($to, $name);
    $mail->setFrom("info@amsvn.com", "Mailer (do not reply)");
    $mail->addBcc('lesliegoh@amsvn.com');
    $mail->addBcc('info@amsvn.com');

    $status = $mail->Send();
    return $status;
}

function AlertWindow($message)
{
    echo "<script language='JavaScript'>window.alert('" . $message . "')</script>";
}

function AlertReload($message)
{
	echo "<script language='JavaScript'>window.alert('$message'); window.location=window.location.href;</script>";
}

//---------- common mailer functions ---------- //
function IsValidEmail($input)
{
    $regex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/';

    if (preg_match($regex,    $input)) {
        return true;
    } else {
        return false;
    }
}

function VerifyCaptcha($CONFIG_MAILER_CAPTCHA_SECRET)
{
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    $data = array(
        'secret' => $CONFIG_MAILER_CAPTCHA_SECRET,
        'response' => $_POST["g-recaptcha-response"]
    );

    $options = array(
        'http' => array(
            'header' => "Content-Type: application/x-www-form-urlencoded",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    if ($captcha_success->success == false) {
        return false;
    } else if ($captcha_success->success == true) {

        return true;
    }
}

if (isset($_POST['sendEnquiry'])) {
    // variables
    $current_url = $_SERVER['REQUEST_URI'];
    $vietVersion = str_contains($current_url, '/vn');
    if ($vietVersion) {
        $senderSalutation = 'Ông/Bà';
    } else {
        $senderSalutation = trim($_POST["amsContact_Salutation"]);
    }
    $senderName = trim($_POST["amsContact_Name"]);
    $senderEmail = trim($_POST["amsContact_Email"]);
    $descriptionOfProblems = trim($_POST["amsContact_Description"]);
    $productName = trim($_POST["amsContact_ProductName"]);
    $serialNumber = trim($_POST["amsContact_SerialNumber"]);
    $productId = trim($_POST["amsContact_ProductID"]);
    $softwareVersion = trim($_POST["amsContact_SoftwareVersion"]);
    $machineManufacturer = trim($_POST["amsContact_MachineManufacturer"]);

    // validate
    $errorMessage = "";

    if ($senderName == '' || $senderEmail == '' || $senderSalutation == '' || $descriptionOfProblems == '') {
        $errorMessage .= $vietVersion ? 'Vui lòng điền đầy đủ thông tin vào các ô bắt buộc' : 'Please fill in all required fields\\n';
    }
    if (!IsValidEmail($senderEmail)) {
        $errorMessage .= $vietVersion ? 'Vui lòng nhập địa chỉ email hợp lệ' : 'Please enter a valid Email Address\\n';
    }
    // to prevent code cracking
    if ($descriptionOfProblems != "") {
        $crack = preg_match("/(to:)|(from:)|(cc:)|(bcc:)/", $descriptionOfProblems);
        if ($crack) {
            $errorMessage .= $vietVersion ? 'Lời nhắn của bạn chứa các ký tự không hợp lệ' : 'Your message contains invalid or illegal characters\\n';
        }
    }

    if ($errorMessage == "") {
        // format message
        $message = ($vietVersion ? 'Cảm ơn bạn đã liên hệ với AMS Việt Nam. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!' : "Thank you for contacting AMS Vietnam. We will get back to you as soon as we can.") . "<br><br>";

        $message .= "<h3>" . ($vietVersion ? 'Thông tin liên hệ' : "Contact information") . "</h3>";
        $message .= ($vietVersion ? 'Từ' : "From") . ": <b>$senderSalutation $senderName</b><br>";
        $message .= "Email: $senderEmail<br><br>";

        if ($descriptionOfProblems != "" || $productName != "" || $serialNumber != "" || $productId != "" || $softwareVersion != "" || $machineManufacturer != "") {
            $message .= "<h3>" . ($vietVersion ? 'Mô tả vấn đề' : 'Problem Definition') . "</h3>";
            $message .= ($vietVersion ? 'Mô tả vấn đề' : 'Description of problem') . ": " . nl2br($descriptionOfProblems) . "<br>";
            $message .= ($vietVersion ? 'Tên sản phẩm' : 'Product name') . ": " . nl2br($productName) . "<br>";
            $message .= ($vietVersion ? 'Số seri' : 'Serial number') . ": " . nl2br($serialNumber) . "<br>";
            $message .= ($vietVersion ? 'ID của sản phẩm' : 'Product ID') . ": " . nl2br($productId) . "<br>";
            $message .= ($vietVersion ? 'Phiên bản phần mềm' : 'Software version') . ": " . nl2br($softwareVersion) . "<br>";
            $message .= ($vietVersion ? 'Xuất sứ' : 'Machine manufacturer') . ": " . nl2br($machineManufacturer) . "<br>";
        }

        if (VerifyCaptcha($CONFIG_MAILER_CAPTCHA_SECRET)) {
            $result = SendEmail($senderEmail, $senderName, $vietVersion ? 'Phiếu yêu cầu dịch vụ của AMS' : "AMS Service Request Form", $message, $CONFIG_MAILER_PASSWORD);
            if ($result) {
                AlertReload($vietVersion ? 'Cảm ơn yêu cầu của bạn. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!' : "Thank you for your enquiry. We will get back to you as soon as we can.");
            }
        } else {
            AlertReload($vietVersion ? 'Vui lòng click vào ô xác nhận "Tôi không phải người máy"' : "Please verify that you are not a bot by ticking the checkbox");
        }
    } else {
        AlertReload($errorMessage);
    }
}
