/**
 * WordPress dependencies
 */
const {
	Component,
} = wp.element;

/**
 * External dependencies
 */
import React from "react";
import { hot } from "react-hot-loader"

/**
 * Internal dependencies
 */
import AnotherComponent from "./another-component.js"

export class HotComponent extends Component {

	constructor( props ) {
		super();
	}

	render() {

		return (
			<div>
				<p>2. Change the text in this component to see hot reloading in action.</p>
				<AnotherComponent />
			</div>
		);
	}
}

export default hot(module)(HotComponent);
