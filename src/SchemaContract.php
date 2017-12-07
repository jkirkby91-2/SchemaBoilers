<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\SchemaBoilers {

		/**
		 * Interface SchemaContract
		 *
		 * @package Jkirkby91\Boilers\SchemaBoilers
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		interface SchemaContract
		{

			/**
			 * @return mixed
			 */
			public function getName();

			/**
			 * @param $name
			 * @return mixed
			 */
			public function setName(string $name);
		}
	}