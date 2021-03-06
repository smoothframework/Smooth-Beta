<?php 

	namespace Smooth\Libraries;

	use Smooth\Errors\Handler;

	/**
	 * @package    Smooth Crypt Library
	 */

	class Crypt
	{
		/**
		 * Crypt your strings with one of the hash algorithms
		 * @param  string $method 
		 * @param  string $string 
		 * @return string         
		 */
		public static function crypter($method, $string)
		{
			$cryptMethods = array('sha1', 'sha224', 'sha256', 'sha384', 'sha512', 'md2', 'md4', 'md5', 'ripemd128', 'ripemd160', 'ripemd256',
				'ripemd320', 'whirlpool', 'snefru', 'snefru256', 'gost', 'crc32', 'crc32b', 'adler32');

			if( in_array( $method, $cryptMethods ) )
				return hash($method, $string);
			else
				Handler::handler('Check your Crypt library', '400','Crypt.php', '27');
		}

	}