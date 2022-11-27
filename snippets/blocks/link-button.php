<?php
$alignmentClass = "left-align";

switch ($block->alignment()) {
  case "center":
    $alignmentClass = "center-align";
    break;
  case "right":
    $alignmentClass = "right-align";
    break;
  default:
    $alignmentClass = "left-align";
}

switch ($block->buttonType()) {
  case "page":
    $link = $block->page()->isNotEmpty() ? $block->page()->toPage()->url() : '';
    break;
  case "link":
    $link = $block->target()->isNotEmpty() ? $block->target()->toUrl() : '';
    break;
  case "file":
    $link = $block->downloadTarget()->isNotEmpty() ? $block->downloadTarget()->toFile()->url() : '';
    break;
  default:
    $link = '';
}

$text = $block->caption()->toHtml();
$tag = $block->tag() == 'inline' ? 'tag:span' : '';
$after = $block->iconAlignment() == 'right' ? ' after: y' : ' ';

$kirbyText = '(icon:' . $block->icon() . ' class: btn center text:' . $text . ' link:' . $link . ' ' . $tag . $after . ')'
?>
<?= kt($kirbyText) ?>
