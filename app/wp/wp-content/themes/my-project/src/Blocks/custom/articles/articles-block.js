import React from 'react';
import { InspectorControls, BlockControls } from '@wordpress/block-editor';
import { ArticlesEditor } from './components/articles-editor';
import { ArticlesOptions } from './components/articles-options';
import { ArticlesToolbar } from './components/articles-toolbar';

export const Articles = (props) => {
	return (
		<>
			<InspectorControls>
				<ArticlesOptions {...props} />
			</InspectorControls>
			<BlockControls>
				<ArticlesToolbar {...props} />
			</BlockControls>
			<ArticlesEditor {...props} />
		</>
	);
};
