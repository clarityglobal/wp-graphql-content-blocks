<?php
/**
 * Core Image Block
 *
 * @package WPGraphQL\ContentBlocks\Blocks
 */

namespace WPGraphQL\ContentBlocks\Blocks;

/**
 * Class CoreImage
 */
class CoreImage extends Block {
	/**
	 * {@inheritDoc}
	 *
	 * @var array|null
	 */
	protected ?array $additional_block_attributes = array(
		'cssClassName' => array(
			'type'      => 'string',
			'selector'  => 'figure',
			'source'    => 'attribute',
			'attribute' => 'class',
		),
		'src'          => array(
			'type'      => 'string',
			'selector'  => 'img',
			'source'    => 'attribute',
			'attribute' => 'src',
		),
	);
}
