<?php

Yii::import('application.components.yiibooster.widgets.TbButtonColumn');

/**
 *## Bootstrap button column widget.
 *
 * Used to set buttons to use Glyphicons instead of the defaults images.
 *
 * @package booster.widgets.grids.columns
 */
class OurButtonColumn extends TbButtonColumn
{
	/**
	 *### .renderButton()
	 *
	 * Renders a link button.
	 *
	 * @param string $id the ID of the button
	 * @param array $button the button configuration which may contain 'label', 'url', 'imageUrl' and 'options' elements.
	 * @param integer $row the row number (zero-based)
	 * @param mixed $data the data object associated with the row
	 */
	protected function renderButton($id, $button, $row, $data)
	{
		if (isset($button['visible']) && !$this->evaluateExpression(
			$button['visible'],
			array('row' => $row, 'data' => $data)
		)
		) {
			return;
		}
                
		$label = isset($button['label']) ? $button['label'] : $id;
                
                $buttonText = isset($button['buttonText']) ? $button['buttonText'] : '';
                
		$url = isset($button['url']) ? $this->evaluateExpression($button['url'], array('data' => $data, 'row' => $row))
			: '#';
		$options = isset($button['options']) ? $button['options'] : array();

		if (!isset($options['title'])) {
			$options['title'] = $label;
		}

		if (!isset($options['data-toggle'])) {
			$options['data-toggle'] = 'tooltip';
		}

		if (isset($button['icon'])) {
			if (strpos($button['icon'], 'icon') === false && strpos($button['icon'], 'fa') === false) {
				$button['icon'] = 'icon-' . implode(' icon-', explode(' ', $button['icon']));
			}

                        
			echo CHtml::link('<i class="' . $button['icon'] . '"></i> ' . $buttonText, $url, $options);
		} else if (isset($button['imageUrl']) && is_string($button['imageUrl'])) {
			echo CHtml::link(CHtml::image($button['imageUrl'], $label), $url, $options);
		} else {
			echo CHtml::link($buttonText, $url, $options);
		}
	}
}
