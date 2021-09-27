import React from 'react';
import { __ } from '@wordpress/i18n';
import { RichText } from '@wordpress/block-editor';
import { checkAttr, getAttrKey } from '@eightshift/frontend-libs/scripts';
import manifest from '../manifest.json';

export const ArticlesEditor = ({ attributes, setAttributes }) => {
	const {
		blockClass,
	} = attributes;

	const articlesContent = checkAttr('articlesContent', attributes, manifest);

	return (
		<div class="block-articles">
			<h3>Latest corns</h3>
			<div class="articles-wrapper">
				<div><p>{__('Article one', 'my-articles')}</p></div>
				<div><p>{__('Article two', 'my-articles')}</p></div>
				<div><p>{__('Article three', 'my-articles')}</p></div>
				<div><p>{__('Article four', 'my-articles')}</p></div>
			</div>
		</div>
	);
};
