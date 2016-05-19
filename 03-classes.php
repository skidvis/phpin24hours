<?

	//base class
	class Vehicle{
		public static $nickname = "automobile";
		protected static $miles = 99;

		function getMiles(){
			return static::$miles;
		}
	}

	class Car extends Vehicle{
		private static $wheels = 4;

		function getWheelCount(){
			return static::$wheels;
		}

		static function isTruck(){
			return "Not a truck.";
		}
	}



Car::isTruck();

$myCar = new Car;

$myCar->getWheelCount();

