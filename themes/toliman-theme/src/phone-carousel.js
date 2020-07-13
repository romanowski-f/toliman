import { registerBlockType } from '@wordpress/blocks';
import {
	RichText,
    AlignmentToolbar,
    BlockControls,
    MediaUpload,
} from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

registerBlockType( 'toliman-blocks/phone-carousel', {
    title: 'Screenshots Carousel',
    icon: 'buddicons-replies',
    category: 'layout',
    attributes: {
		mediaID: {
			type: 'array',
			selector: '.media-ids'
		},
		mediaURL: {
			type: 'array',
			source: 'attribute',
			selector: 'img',
			attribute: 'src',
		}
	},
	edit: (props) => {
		const {
        	attributes: {
				mediaID,
				mediaURL,
            },
            className,
            setAttributes
        } = props;

		const onSelectImage = ( media ) => {
			let ids = [];
			let urls = [];

			media.forEach(function(item) {
				console.log(item.id);
				ids.push(item.id + '/');
				urls.push(item.url);
			})

			setAttributes( {
				mediaURL: urls,
				mediaID: ids
			} );
		};

		return (
				<div className="carousel-images">
					<MediaUpload
						onSelect={ onSelectImage }
						allowedTypes="image"
						multiple="true"
						value={ mediaID }
						render={ ( { open } ) => (
							<Button className={ mediaID ? 'image-button' : 'button button-large' } onClick={ open }>
								{ ! mediaID ? 'Upload Image' : <img src={ mediaURL } alt='Upload App Screenshots' /> }
							</Button>
						) }
					/>
					<div className="media-ids">{ mediaID }</div>
				</div>
		);
	},
	save: (props) => {
		const {
        	attributes: {
				mediaID,
				mediaURL,
            },
            className
        } = props;

        return (
	        <div className={ className }>
		        <div class="p-3">
				{
					mediaURL && (
			        	<img className="vessel-image" src={ mediaURL } data-id={ mediaID } />
			        )
			    }
			    <div className="the-ids">{ mediaID }</div>
		        </div>
	        </div>
        )
	}
} );