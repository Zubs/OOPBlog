<?php

	/**
	 * This is my blog class, where blog post can be created, read, updated and deleted
	 */
	class Blog
	{
		function __construct()
		{
			// Code goes here
		}

		public function all()
		{
			echo "Hello";
		}

		public function find($id)
		{
			echo "This method displays the blog with id of $id";
		}

		public function delete($id)
		{
			echo "This method displays the blog with id of $id";
		}

		public function save()
		{
			// protected $title;
			// protected $body;
			echo "This method creates a new blog";
		}
	}

?>