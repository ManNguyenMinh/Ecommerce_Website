<?php
// Generate breadcrumbs for any page
function Page_Breadcrumbs($arrCrumbs)
{
  $output = '<ul class="breadcrumb subtitle-2" style="font-weight: 400;">';

  $arr = array();
  foreach ($arrCrumbs as $crumb) {
    $arr[] = '<li class="custom-breadcrumb-item">' . $crumb . '</li>';
  }

  $output .= implode('<li class="custom-breadcrumb-item"><i class="bi bi-chevron-right"></i></li>', $arr);
  $output .= '</ul>';

  return $output;
}

function DisplayDropdownFilterMenu($arrMenuItems, $menuID, $menuTitle, $defaultItem = 'Show All')
{
  $output = '<div class="d-flex subtitle-2">';
  $output .= '<div class="me-2" style="color: var(--color-body-text)">' . $menuTitle . ':</div>';
  $output .= '<div class="dropdown">';
  $output .= '<button class="btn p-0 border-0" id="' . $menuID . '" data-bs-toggle="dropdown" aria-expanded="false" style="color: var(--color-heading-text); cursor: pointer; font-weight: inherit">' . $defaultItem . '<i class="bi bi-chevron-down ms-2"></i></button>';
  $output .= '<ul class="dropdown-menu dropdown-menu-end border-0 rounded-0 p-1" style="background-color: var(--gray-100)" aria-labelledby="' . $menuID . '">';
  foreach ($arrMenuItems as $menuItem)
  {
    $href = $menuItem != 'Show all' ? '?filter=' . $menuItem . '"' : '?';
    $output .= '<li><a class="dropdown-item subtitle-2 py-3 px-4" href="' . $href . '"><div class="check-icon me-1"><i class="bi bi-check"></i></div>' . $menuItem . '</a></li>';
  }
  $output .= '</ul>';
  $output .= '</div>';
  $output .= '</div>';

  return $output;
}

function DisplayBlogPost($blog)
{
  $output = '';
  $output .= '<div class="col-md-6 col-lg-4 col-xxl-3 d-flex">';
  $output .= '  <a href="/blog/' . $blog['link'] . '" class="flex-grow-1">';
  $output .= '    <div class="card blog-card p-2 border-0 d-flex flex-column h-100">';
  // image src to add /images/blog/ at the start
  $output .= '      <img src="' . $blog['image'] . '" alt="" class="w-100 object-fit-cover">';
  $output .= '      <div class="card-body d-flex flex-column px-0">';
  $output .= '        <div class="mb-2" style="color: var(--color-body-text);">';
  $output .= '          <span class="publish-date caption">' . $blog['date'] . '</span> | <span class="blog-category caption">' . $blog['category'] . '</span>';
  $output .= '        </div>';
  $output .= '        <div class="subtitle-1 mb-2">' . $blog['title'] . '</div>';
  $output .= '        <div class="blog-description flex-grow-1 mb-3">' . $blog['description'] . '</div>';
  $output .= '        <div class="blog-read-more caption">';
  $output .= '          <i class="bi bi-arrow-right"></i>';
  $output .= '          <span>Read More</span>';
  $output .= '        </div>';
  $output .= '      </div>';
  $output .= '    </div>';
  $output .= '  </a>';
  $output .= '</div>';

  return $output;
}
?>