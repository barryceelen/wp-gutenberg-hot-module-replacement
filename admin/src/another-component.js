/**
 * WordPress dependencies
 */
const {
	Component,
} = wp.element;

export class AnotherComponent extends Component {

	constructor( props ) {
		super();
	}

	render() {

		return (
			<p><i>3. This is a child component. Updating its source will trigger a hot reload as well.</i></p>
		);
	}
}

export default AnotherComponent;
