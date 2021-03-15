import React from 'react';
import { render } from 'react-dom';

const HelloWorld = ({ nonce }: {nonce: any}) => <h1>{`Hellowdwe World ${nonce}`}</h1>;

// @ts-ignore
render(<HelloWorld nonce={ajaxnonce} />, document.getElementById('srw_wishlist'))
