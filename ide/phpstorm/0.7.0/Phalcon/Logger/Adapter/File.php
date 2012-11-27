<?php 

namespace Phalcon\Logger\Adapter {

	/**
	 * Phalcon\Logger\Adapter\File
	 *
	 * Adapter to store logs in plain text files
	 *
	 *<code>
	 *$logger = new Phalcon\Logger\Adapter\File("app/logs/test.log");
	 *$logger->log("This is a message");
	 *$logger->log("This is an error", Phalcon\Logger::ERROR);
	 *$logger->error("This is another error");
	 *$logger->close();
	 *</code>
	 */
	
	class File extends \Phalcon\Logger\Adapter {

		protected $_fileHandler;

		protected $_transaction;

		protected $_path;

		protected $_options;

		protected $_quenue;

		protected $_dateFormat;

		protected $_format;

		/**
		 * \Phalcon\Logger\Adapter\File constructor
		 *
		 * @param string $name
		 * @param array $options
		 */
		public function __construct($name, $options=null){ }


		/**
		 * Set the log format
		 *
		 * @param string $format
		 */
		public function setFormat($format){ }


		/**
		 * Returns the log format
		 *
		 * @return format
		 */
		public function getFormat(){ }


		/**
		 * Applies the internal format to the message
		 *
		 * @param  string $message
		 * @param  int $type
		 * @param  int $time
		 * @return string
		 */
		protected function _applyFormat(){ }


		/**
		 * Sets the internal date format
		 *
		 * @param string $date
		 */
		public function setDateFormat($date){ }


		/**
		 * Returns the internal date format
		 *
		 * @return string
		 */
		public function getDateFormat(){ }


		/**
		 * Sends/Writes messages to the file log
		 *
		 * @param string $message
		 * @param int $type
		 */
		public function log($message, $type=null){ }


		/**
		  * Starts a transaction
		  *
		  */
		public function begin(){ }


		/**
		  * Commits the internal transaction
		  *
		  */
		public function commit(){ }


		/**
		  * Rollbacks the internal transaction
		  *
		  */
		public function rollback(){ }


		/**
		  * Closes the logger
		  *
		  * @return boolean
		  */
		public function close(){ }


		/**
		 * Opens the internal file handler after unserialization
		 *
		 */
		public function __wakeup(){ }

	}
}
