<?php

namespace Drupal\vtanosveny\Plugin\Filter;

use Drupal\Core\Form\FormStateInterface;
use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Provides a 'Turistajelzesek' filter.
 *
 * @Filter(
 *   id = "vtanosveny_turistajelzesek",
 *   title = @Translation("Turistajelzesek"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 *   settings = {
 *     "example" = "foo",
 *   },
 *   weight = -10
 * )
 */
class Turistajelzesek extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $imgSrc = '<img src="/sites/default/assets/';
    // @DCG Process text here.
    $jelezesPlaceholder = [
      '[pirossav]',
      '[keksav]',
      '[zoldsav]',
      '[sargasav]',
    ];
    $jelzesekIcons = [
      $imgSrc.'pirossav.png" />',
      $imgSrc.'keksav.png" />',
      $imgSrc.'zoldsav.png" />',
      $imgSrc.'sargasav.png" />',
    ];
    $text = str_replace($jelezesPlaceholder, $jelzesekIcons, $text);
    return new FilterProcessResult($text);
  }

  /**
   * {@inheritdoc}
   */
  public function tips($long = FALSE) {
    return $this->t('Some filter tips here.');
  }

}
