 <?php 
	trait Singleton
	{
		private static $instance;
		public static function getInstansOf()
		{
			if(!(self::$instance instanceof self))
			{
				self::$instance = new self;
			}
			return self::$instance;
		}
	}
 ?>