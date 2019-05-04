/**
 * WordPress dependencies
 */
const { Component }          = wp.element;
const { Modal, TextControl } = wp.components;

class Main extends Component {
	constructor( props ) {
		super( props );

		this.state = {
			showModal : true,
			text      : '',
		};
	}

	render() {
		const { text, showModal } = this.state;

		if ( ! showModal ) {
			return null;
		}

		return (
			<Modal
				title={ 'type something in input, hit escape, hit down key' }
				onRequestClose={ () => this.setState( { showModal : false } ) }
				isDismissable={ true }
			>
				<TextControl
					value={ text }
					onChange={ value => { this.setState( { text : value } ) } }
				/>
			</Modal>
		);
	}
}

export default Main;
