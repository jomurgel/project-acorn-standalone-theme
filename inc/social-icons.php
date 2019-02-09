<?php
/**
 * All social media icons.
 *
 * @package Acorn_Theme
 * @since 1.0.0
 */

namespace AcornTheme\SocialIcons;

/**
 * Setup social icon array of svgs.
 *
 * @package Acorn_Theme
 * @since 1.0.0
 * @return array social icon svgs.
 */
function get_social_icon_array() {

	return array(
		'dribbble'  => '<svg version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m50 0c-27.6 0-50 22.4-50 50s22.4 50 50 50c27.5 0 50-22.4 50-50s-22.5-50-50-50zm33 23c6 7.3 9.5 16.5 9.7 26.6-1.4-0.3-15.5-3.1-29.7-1.4-0.3-0.7-0.6-1.5-0.9-2.2-0.9-2.1-1.8-4.2-2.8-6.2 15.6-6.3 22.8-15.6 23.7-16.8zm-33-15.6c10.8 0 20.8 4.1 28.3 10.7-0.8 1.1-7.2 9.7-22.4 15.4-7-12.9-14.8-23.4-15.9-25 3.2-0.7 6.5-1.1 10-1.1zm-18.2 4c1.1 1.5 8.7 12.1 15.8 24.7-20 5.3-37.6 5.2-39.5 5.2 2.9-13.3 11.8-24.3 23.7-29.9zm-24.5 38.7v-1.3c1.8 0.1 22.6 0.3 43.9-6.1 1.2 2.4 2.4 4.8 3.5 7.3-0.5 0.2-1.1 0.3-1.7 0.5-22 7.1-33.7 26.5-34.7 28.1-6.9-7.6-11-17.6-11-28.5zm42.7 42.6c-9.9 0-19-3.4-26.2-9 0.8-1.6 9.4-18.3 33.5-26.7 0.1-0.1 0.2-0.1 0.3-0.1 6 15.6 8.5 28.6 9.1 32.4-5.1 2.2-10.8 3.4-16.7 3.4zm23.8-7.3c-0.4-2.6-2.7-15.1-8.3-30.4 13.4-2.1 25.1 1.4 26.6 1.8-1.9 11.9-8.7 22.2-18.3 28.6z"/>
		</svg>',
		'facebook'  => '<svg version="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m68 0h-64c-2.2 0-4 1.8-4 4v64c0 2.2 1.8 4 4 4h34.5v-27.8h-9.4v-10.9h9.4v-8c0-9.3 5.7-14.4 14-14.4 2.8 0 5.6 0.1 8.4 0.4v9.7h-5.7c-4.5 0-5.4 2.1-5.4 5.3v6.9h10.8l-1.4 10.9h-9.5v27.9h18.3c2.2 0 4-1.8 4-4v-64c0-2.2-1.8-4-4-4z"/>
		</svg>
		',
		'github'    => '<svg version="1.1" viewBox="0 0 73.6 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="M71.6,24.87a36.93,36.93,0,0,1-22.9,46.9c-1.8.3-2.5-.6-2.5-1.8V59.87a8.66,8.66,0,0,0-2.5-6.8c8.3-.8,16.9-3.9,16.9-18.1a14.43,14.43,0,0,0-3.8-9.9,13.54,13.54,0,0,0-.5-9.7s-3.1-1-10.1,3.8a34.19,34.19,0,0,0-18.5,0c-7.1-4.8-10.2-3.8-10.2-3.8a13.29,13.29,0,0,0-.4,9.8,14,14,0,0,0-3.8,9.9c0,14,8.6,17.2,16.8,18.1a7.09,7.09,0,0,0-2.3,4.9h0A7.89,7.89,0,0,1,17.1,55a7.46,7.46,0,0,0-5.6-3.8s-3.6,0-.3,2.3a9.65,9.65,0,0,1,4.1,5.4s2.2,7.2,12.5,5v6.3c0,1-.6,2.1-2.5,1.8A36.94,36.94,0,0,1,36.9,0,37,37,0,0,1,71.6,24.87Z" />
		</svg>',
		'instagram' => '<svg version="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m71.8 21.2c-0.2-3.8-0.8-6.4-1.7-8.7-0.9-2.5-2.3-4.7-4.1-6.5s-4-3.3-6.4-4.2c-2.3-0.9-4.9-1.5-8.7-1.7s-5.1-0.1-14.9-0.1-11 0-14.8 0.2-6.5 0.8-8.8 1.7c-2.4 0.9-4.6 2.3-6.4 4.1s-3.2 4-4.2 6.4c-0.9 2.3-1.5 4.9-1.7 8.7s-0.1 5.1-0.1 14.9 0 11 0.2 14.8 0.8 6.4 1.7 8.7c0.9 2.5 2.3 4.7 4.1 6.5s4 3.2 6.4 4.2c2.3 0.9 4.9 1.5 8.7 1.7s5.1 0.1 14.9 0.1 11 0 14.8-0.2 6.4-0.8 8.7-1.7c4.8-1.9 8.7-5.7 10.5-10.5 0.9-2.3 1.5-4.9 1.7-8.7 0.3-3.9 0.3-5.1 0.3-14.9s0-11-0.2-14.8zm-6.5 29.3c-0.2 3.5-0.7 5.4-1.2 6.7-1.2 3.1-3.7 5.6-6.8 6.8-1.3 0.5-3.2 1.1-6.7 1.2-3.8 0.2-4.9 0.2-14.5 0.2s-10.8 0-14.5-0.2c-3.5-0.2-5.4-0.7-6.7-1.2-1.6-0.6-3-1.5-4.1-2.7-1.2-1.2-2.1-2.6-2.7-4.1-0.5-1.3-1.1-3.2-1.2-6.7-0.4-3.8-0.4-4.9-0.4-14.5s0-10.8 0.2-14.5c0.2-3.5 0.7-5.4 1.2-6.7 0.6-1.6 1.5-3 2.7-4.1 1.2-1.2 2.6-2.1 4.1-2.7 1.3-0.5 3.2-1.1 6.7-1.2 3.8-0.2 4.9-0.2 14.5-0.2s10.8 0 14.5 0.2c3.5 0.2 5.4 0.7 6.7 1.2 1.6 0.6 3 1.5 4.1 2.7 1.2 1.2 2.1 2.6 2.7 4.1 0.5 1.3 1.1 3.2 1.2 6.7 0.2 3.8 0.2 4.9 0.2 14.5s0.2 10.8 0 14.5zm-29.3-33c-10.2 0-18.5 8.3-18.5 18.5s8.3 18.5 18.5 18.5 18.5-8.3 18.5-18.5-8.3-18.5-18.5-18.5zm0 30.5c-6.6 0-12-5.4-12-12s5.4-12 12-12 12 5.4 12 12-5.4 12-12 12zm23.5-31.2c0 2.4-1.9 4.3-4.3 4.3s-4.3-1.9-4.3-4.3 1.9-4.3 4.3-4.3 4.3 1.9 4.3 4.3z"/></svg>',
		'linkedin'  => '<svg version="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<title>presentArtboard 9</title>
		<path d="m66.7 0h-61.4c-2.9 0-5.3 2.3-5.3 5.2v61.6c0 2.9 2.4 5.2 5.3 5.2h61.4c2.9 0 5.3-2.3 5.3-5.2v-61.6c0-2.9-2.4-5.2-5.3-5.2zm-45.3 61.4h-10.7v-34.4h10.7v34.4zm-5.4-39.1c-3.4 0-6.2-2.8-6.2-6.2s2.8-6.2 6.2-6.2 6.2 2.8 6.2 6.2-2.8 6.2-6.2 6.2zm45.3 39.1h-10.6v-16.8c0-4-0.1-9.1-5.5-9.1-5.6 0-6.4 4.3-6.4 8.8v17h-10.7v-34.3h10.2v4.7h0.1c1.4-2.7 4.9-5.5 10.1-5.5 10.8 0 12.8 7.1 12.8 16.4v18.8z"/>
		</svg>',
		'pinterest' => '<svg eversion="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m36 0c-19.9 0-36 16.1-36 36 0 15.2 9.5 28.3 22.9 33.5-0.3-2.8-0.6-7.2 0.1-10.3 0.7-2.8 4.2-17.9 4.2-17.9s-1.1-2.2-1.1-5.3c0-5 2.9-8.7 6.5-8.7 3.1 0 4.6 2.3 4.6 5.1 0 3.1-2 7.7-3 12-0.9 3.6 1.8 6.5 5.3 6.5 6.4 0 11.3-6.8 11.3-16.5 0-8.6-6.2-14.6-15-14.6-10.2 0-16.3 7.7-16.3 15.6 0 3.1 1.2 6.4 2.7 8.2 0.3 0.4 0.3 0.7 0.2 1-0.3 1.1-0.9 3.6-1 4.1-0.1 0.7-0.5 0.8-1.2 0.5-4.4-2.2-7.2-8.8-7.2-14.1 0-11.3 8.2-21.8 23.8-21.8 12.5 0 22.2 8.9 22.2 20.8 0 12.4-7.8 22.4-18.7 22.4-3.6 0-7.1-1.9-8.2-4.1 0 0-1.8 6.9-2.2 8.6-0.8 3.1-3 7-4.5 9.4 3.4 1 6.9 1.6 10.7 1.6 19.9 0 36-16.1 36-36-0.1-19.9-16.2-36-36.1-36z"/></svg>',
		'reddit'    => '<svg version="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m48 39.8c0 2-1.7 3.7-3.7 3.7-2.1 0-3.7-1.7-3.7-3.7s1.7-3.7 3.7-3.7c2.1 0 3.7 1.7 3.7 3.7zm-16.6-0.1c0-2-1.7-3.7-3.7-3.7s-3.7 1.6-3.7 3.7 1.7 3.7 3.7 3.7 3.7-1.7 3.7-3.7zm12.1 8.5c-1.6 1.6-5.1 2.2-7.5 2.2s-5.9-0.6-7.5-2.2c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4c2.5 2.5 7.5 2.7 8.9 2.7s6.3-0.1 8.9-2.7c0.4-0.3 0.4-0.9 0-1.4-0.4-0.4-1-0.4-1.4 0zm28.5-12.2c0 19.9-16.1 36-36 36s-36-16.1-36-36 16.1-36 36-36 36 16.1 36 36zm-12 0c0-2.9-2.4-5.3-5.3-5.3-1.4 0-2.7 0.5-3.6 1.5-3.6-2.6-8.5-4.3-14-4.5l2.4-11.2 7.8 1.6c0.1 2 1.7 3.6 3.7 3.6 2.1 0 3.7-1.7 3.7-3.7 0-2.1-1.7-3.7-3.7-3.7-1.5 0-2.7 0.8-3.3 2.1l-8.7-1.9c-0.3 0-0.5 0-0.7 0.1s-0.3 0.3-0.4 0.6l-2.7 12.5c-5.6 0.2-10.6 1.8-14.2 4.5-0.9-0.9-2.2-1.5-3.6-1.5-2.9 0-5.3 2.4-5.3 5.3 0 2.1 1.3 4 3.1 4.8-0.1 0.5-0.1 1.1-0.1 1.6 0 8.1 9.4 14.6 21 14.6s21-6.5 21-14.6c0-0.5 0-1.1-0.1-1.6 1.7-0.8 3-2.7 3-4.8z"/></svg>',
		'skype'     => '<svg version="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m54 52.6c-1.6 2.2-3.9 4-7 5.2-3 1.2-6.6 1.9-10.7 1.9-4.9 0-9.1-0.9-12.3-2.5-2.3-1.2-4.2-2.9-5.7-4.9-1.5-2.1-2.2-4.1-2.2-6.1 0-1.2 0.5-2.3 1.4-3.2s2.1-1.3 3.6-1.3c1.2 0 2.2 0.3 3 1s1.5 1.6 2 2.9c0.6 1.4 1.3 2.5 2 3.4s1.6 1.6 2.9 2.2c1.2 0.6 2.9 0.9 5 0.9 2.8 0 5.2-0.6 6.9-1.8 1.7-1.1 2.5-2.5 2.5-4.2 0-1.3-0.4-2.4-1.3-3.2-0.9-0.9-2.2-1.5-3.7-2-1.6-0.5-3.7-1-6.3-1.5-3.6-0.8-6.6-1.6-9-2.7-2.5-1-4.4-2.5-5.9-4.3s-2.2-4.1-2.2-6.8c0-2.6 0.8-4.9 2.3-6.8 1.5-2 3.8-3.5 6.7-4.6 2.8-1 6.2-1.6 10.1-1.6 3.1 0 5.8 0.4 8 1 2.3 0.7 4.2 1.6 5.7 2.8s2.6 2.4 3.3 3.7 1.1 2.6 1.1 3.9c0 1.2-0.5 2.3-1.4 3.3s-2.1 1.5-3.5 1.5c-1.3 0-2.3-0.3-3-0.9-0.6-0.6-1.3-1.4-2.1-2.7-0.9-1.6-1.9-2.9-3.1-3.8s-3.1-1.3-5.7-1.3c-2.5 0-4.5 0.5-5.9 1.4s-2.1 2-2.1 3.2c0 0.8 0.2 1.4 0.7 2s1.2 1.1 2 1.5c0.9 0.4 1.8 0.8 2.8 1.1s2.6 0.7 4.7 1.2c2.8 0.6 5.3 1.2 7.6 2 2.3 0.7 4.3 1.6 5.9 2.6 1.6 1.1 2.9 2.4 3.9 4 0.9 1.6 1.4 3.6 1.4 6 0 2.7-0.8 5.2-2.4 7.5zm15.9-9c0.5-2.3 0.8-4.8 0.8-7.3 0-18.7-15.4-33.9-34.3-33.9-2 0-4 0.2-5.9 0.5-3.1-1.9-6.7-3-10.6-3-11 0.1-19.9 8.9-19.9 19.7 0 3.6 1 7 2.7 9.9-0.4 2.3-0.7 4.5-0.7 6.9 0 18.7 15.4 33.9 34.3 33.9 2.2 0 4.3-0.2 6.3-0.6 2.8 1.5 6 2.3 9.4 2.3 11 0 19.9-8.8 19.9-19.6 0.1-3.2-0.6-6.1-2-8.8z"/></svg>',
		'slack'     => '<svg version="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m15.1 45.5c0 4.2-3.4 7.6-7.6 7.6s-7.5-3.4-7.5-7.6 3.4-7.6 7.6-7.6h7.6v7.6zm3.8 0c0-4.2 3.4-7.6 7.6-7.6s7.6 3.4 7.6 7.6v18.9c0 4.2-3.4 7.6-7.6 7.6s-7.6-3.4-7.6-7.6v-18.9zm7.6-30.4c-4.2 0-7.6-3.4-7.6-7.6s3.4-7.5 7.6-7.5 7.6 3.4 7.6 7.6v7.6h-7.6zm0 3.8c4.2 0 7.6 3.4 7.6 7.6s-3.4 7.6-7.6 7.6h-18.9c-4.2 0-7.6-3.4-7.6-7.6s3.4-7.6 7.6-7.6h18.9zm30.4 7.6c0-4.2 3.4-7.6 7.6-7.6s7.6 3.4 7.6 7.6-3.4 7.6-7.6 7.6h-7.6v-7.6zm-3.8 0c0 4.2-3.4 7.6-7.6 7.6s-7.6-3.4-7.6-7.6v-18.9c0-4.2 3.4-7.6 7.6-7.6s7.6 3.4 7.6 7.6v18.9zm-7.6 30.4c4.2 0 7.6 3.4 7.6 7.6s-3.4 7.6-7.6 7.6-7.6-3.4-7.6-7.6v-7.6h7.6zm0-3.8c-4.2 0-7.6-3.4-7.6-7.6s3.4-7.6 7.6-7.6h18.9c4.2 0 7.6 3.4 7.6 7.6s-3.4 7.6-7.6 7.6h-18.9z"/></svg>',
		'snapchat'  => '<svg version="1.1" viewBox="0 0 76.7 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m38.8 72h-0.6-0.4c-4.5 0-7.5-2.1-10.3-4.1-1.9-1.4-3.8-2.7-6-3-1.1-0.2-2.1-0.3-3.1-0.3-1.8 0-3.3 0.3-4.3 0.5-0.6 0.1-1.2 0.2-1.6 0.2s-0.9-0.1-1.1-0.8c-0.2-0.6-0.3-1.2-0.4-1.8-0.3-1.5-0.6-2.4-1.2-2.5-7.2-1.1-9.3-2.6-9.7-3.7-0.1-0.1-0.1-0.2-0.1-0.4 0-0.4 0.3-0.8 0.7-0.8 11.1-1.8 16-13.1 16.3-13.6 0.7-1.4 0.8-2.6 0.4-3.5-0.8-1.8-3.2-2.6-4.9-3.1-0.4-0.1-0.8-0.2-1.1-0.4-3.3-1.4-3.6-2.7-3.4-3.4 0.2-1.2 1.8-2 3-2 0.3 0 0.6 0.1 0.9 0.2 1.5 0.7 2.8 1 3.9 1 1.6 0 2.3-0.7 2.4-0.8 0-0.7-0.1-1.5-0.1-2.3-0.4-5.2-0.8-11.7 0.9-15.4 5-11.1 15.5-12 18.6-12h1.4 0.2c3.1 0 13.7 0.9 18.6 12 1.7 3.7 1.2 10.2 0.9 15.5v0.2c0 0.7-0.1 1.4-0.1 2.1 0.1 0.1 0.7 0.7 2.2 0.7 1.1 0 2.3-0.4 3.7-1 0.4-0.2 0.9-0.2 1.2-0.2 0.5 0 0.9 0.1 1.3 0.3 1.1 0.4 1.8 1.2 1.9 2 0 0.8-0.6 1.9-3.4 3.1-0.3 0.1-0.7 0.2-1.1 0.4-1.6 0.5-4.1 1.3-4.9 3.1-0.4 1-0.3 2.2 0.4 3.5 0.1 0.4 5 11.8 16.1 13.6 0.4 0.1 0.7 0.4 0.7 0.8 0 0.2 0 0.3-0.1 0.5-0.5 1.1-2.5 2.6-9.7 3.7-0.6 0.1-0.8 0.9-1.2 2.5-0.1 0.6-0.3 1.2-0.4 1.8-0.2 0.5-0.5 0.8-1 0.8h-0.1c-0.4 0-0.9-0.1-1.6-0.2-1.2-0.2-2.6-0.5-4.3-0.5-1 0-2.1 0.1-3.1 0.3-2.2 0.4-4 1.7-5.9 3-3 1.9-5.9 4-10.5 4z"/></svg>',
		'tumblr'    => '<svg version="1.1" viewBox="0 0 72 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M57.6,0H14.4C6.4,0,0,6.4,0,14.4v43.2C0,65.6,6.4,72,14.4,72h43.2C65.6,72,72,65.6,72,57.6V14.4C72,6.4,65.5,0,57.6,0z   M48.4,58.4h-7.6c-6.8,0-11.9-3.5-11.9-11.9V33h-6.2v-7.3c6.8-1.8,9.7-7.7,10-12.7h7.1v11.6h8.3V33h-8.3v11.7c0,3.5,1.8,4.7,4.6,4.7  h4V58.4z"/></svg>',
		'twitter'   => '<svg version="1.1" viewBox="0 0 88.6 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m27.9 72c33.4 0 51.7-27.7 51.7-51.7 0-0.8 0-1.6-0.1-2.3 3.6-2.6 6.6-5.8 9.1-9.4-3.3 1.5-6.8 2.4-10.4 2.9 3.8-2.3 6.6-5.8 8-10.1-3.6 2.1-7.5 3.6-11.5 4.4-6.9-7.3-18.4-7.7-25.7-0.8-4.7 4.4-6.7 11.1-5.3 17.4-14.7-0.8-28.3-7.7-37.5-19.1-4.8 8.3-2.4 18.9 5.6 24.3-2.9-0.1-5.7-0.9-8.3-2.3v0.2c0 8.7 6.1 16.1 14.6 17.8-2.7 0.7-5.5 0.8-8.2 0.3 2.4 7.4 9.2 12.5 17 12.6-6.4 5.1-14.4 7.8-22.6 7.8-1.4 0-2.9-0.1-4.3-0.3 8.3 5.5 18 8.3 27.9 8.3"/></svg>',
		'vimeo'     => '<svg version="1.1" viewBox="0 0 83.1 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m83.1 16.7c-0.4 8.1-6 19.2-16.9 33.3-11.4 14.6-21 22-28.8 22-4.8 0-8.9-4.5-12.3-13.4l-6.7-24.6c-2.5-9-5.2-13.4-8-13.4-0.6 0-2.8 1.3-6.5 3.9l-3.9-5c4.1-3.6 8.1-7.2 12.1-10.8 5.5-4.7 9.6-7.2 12.3-7.5 6.5-0.6 10.4 3.8 11.9 13.3 1.7 10.1 2.8 16.5 3.4 19 1.9 8.5 3.9 12.7 6.2 12.7 1.7 0 4.4-2.8 7.8-8.3 3.5-5.5 5.3-9.7 5.6-12.6 0.5-4.7-1.4-7.1-5.6-7.1-2.1 0-4.2 0.5-6.1 1.4 4-13.4 11.8-20 23.3-19.6 8.6 0.3 12.6 5.8 12.2 16.7z"/></svg>',
		'vk'        => '<svg version="1.1" viewBox="0 0 121 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
		<path d="m118.1 5c0.9-2.8 0-4.9-4-4.9h-13.1c-3.3 0-4.9 1.8-5.8 3.7 0 0-6.8 16.4-16.3 27-3.1 3.2-4.5 4.2-6.1 4.2-0.9 0-2-1-2-3.8v-26.3c0-3.3-1-4.9-3.8-4.9h-20.9c-2 0-3.3 1.5-3.3 3.1 0 3.2 4.7 4 5.3 12.9v19.5c0 4.2-0.8 5-2.4 5-4.5 0-15.4-16.5-21.9-35.4-1.4-3.7-2.7-5.1-6-5.1h-13.3c-3.9 0-4.5 1.8-4.5 3.7 0 3.5 4.5 20.9 20.9 43.9 10.9 15.8 26.4 24.2 40.4 24.2 8.5 0 9.5-1.9 9.5-5.1v-11.9c0-3.8 0.8-4.5 3.5-4.5 1.9 0 5.4 1 13.2 8.6 9 9 10.5 13.1 15.5 13.1h13.2c3.8 0 5.6-1.9 4.6-5.6-1.2-3.7-5.5-9.1-11.1-15.5-3.1-3.6-7.7-7.6-9.1-9.5-1.9-2.6-1.4-3.6 0-5.9-0.3 0 15.9-22.8 17.5-30.5"/></svg>',
		'youtube'   => '<svg version="1.1" viewBox="0 0 102.9 72" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M100.8,11.2c-1.2-4.4-4.7-7.9-9.1-9.1C83.6,0,51.4,0,51.4,0S19.2,0,11.2,2.2c-4.4,1.2-7.9,4.7-9.1,9.1  C0,19.3,0,36,0,36s0,16.7,2.2,24.8c1.2,4.4,4.7,7.9,9.1,9.1c8,2.1,40.2,2.1,40.2,2.1s32.2,0,40.2-2.2c4.4-1.2,7.9-4.6,9.1-9.1  c2.1-8,2.1-24.8,2.1-24.8S102.9,19.3,100.8,11.2z M41.1,51.5V20.6L67.9,36L41.1,51.5z"/></svg>',
	);
}
