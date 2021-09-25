import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';
import { RangeControl, PanelBody } from "@wordpress/components"
import { InspectorControles } from "@wordpress/block-editor"

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<h3>Latest corns</h3>
			<div class="articles-wrapper">
				<div><p>{__('Article one', 'my-articles')}</p></div>
				<div><p>{__('Article two', 'my-articles')}</p></div>
				<div><p>{__('Article three', 'my-articles')}</p></div>
				<div><p>{__('Article four', 'my-articles')}</p></div>
			</div>
		</div>
	);
}
