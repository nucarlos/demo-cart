<?php
/**
 * Part of the Converter package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Converter
 * @version    1.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

return array(

	/*
	|--------------------------------------------------------------------------
	| Measurements
	|--------------------------------------------------------------------------
	|
	| The available measurements to convert and format units.
	|
	*/

	'measurements' => array(

		/*
		|--------------------------------------------------------------------------
		| Area
		|--------------------------------------------------------------------------
		|
		| The available measurements to convert and format areas.
		|
		*/

		'area' => array(

			'sqm' => array(
				'format' => '1,00.00 SQM',
				'unit'   => 1,
			),

			'acre' => array(
				'format' => '1,00.000 Acres',
				'unit'   => 0.000247105,
			),

		),

		/*
		|--------------------------------------------------------------------------
		| Currency
		|--------------------------------------------------------------------------
		|
		| The available measurements to convert and format currencies.
		|
		*/

		'currency' => array(

			'usd' => array(
				'format' => '$1,0.00',
				'negative' => '($1,0.00) neg',
			),

			'eur' => array(
				'format' => '&euro;1,0.00',
				'unit'   => '0.78'
			),

			'gbp' => array(
				'format' => '&pound;1,0.00',
			),

		),

		/*
		|--------------------------------------------------------------------------
		| Length
		|--------------------------------------------------------------------------
		|
		| The available measurements to convert and format lengths.
		|
		*/

		'length' => array(

			'km' => array(
				'format' => '1,0.00 KM',
				'unit'   => 1.00,
			),

			'm' => array(
				'format' => '1,0.00 M',
				'unit'   => 1000,
			),

			'cm' => array(
				'format' => '1,0.00 CM',
				'unit'   => 100000,
			),

			'mm' => array(
				'format' => '1,0.00 MM',
				'unit'   => 1000000,
			),

		),

		/*
		|--------------------------------------------------------------------------
		| Weight
		|--------------------------------------------------------------------------
		|
		| The available measurements to convert and format weights.
		|
		*/

		'weight' => array(

			'kg' => array(
				'format' => '1,0.00 KG',
				'unit'   => 1.00,
			),

			'g' => array(
				'format' => '1,0.00 G',
				'unit'   => 1000.00,
			),

		),

	),

	/*
	|--------------------------------------------------------------------------
	| Currency Cache Expiration Duration
	|--------------------------------------------------------------------------
	|
	| The duration currency rates are cached in minutes.
	|
	*/

	'expires' => 60,

	/*
	|--------------------------------------------------------------------------
	| Currency Service Exchangers
	|--------------------------------------------------------------------------
	|
	| Here, you may specify any number of service exchangers configurations
	| your application requires.
	|
	*/

	'exchangers' => array(

		/*
		|--------------------------------------------------------------------------
		| Default Exchanger
		|--------------------------------------------------------------------------
		|
		| Define here the default exchanger.
		|
		*/

		'default' => 'native',

		/*
		|--------------------------------------------------------------------------
		| OpenExchangeRates.org
		|--------------------------------------------------------------------------
		|
		| Define here the OpenExchangeRates.org app id.
		|
		*/

		'openexchangerates' => array(

			'app_id' => null,

		),

	),

);
