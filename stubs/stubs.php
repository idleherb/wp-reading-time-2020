<?php

namespace PHPUnit\Framework {
    /**
     * Interface for classes that can return a description of itself.
     */
    interface SelfDescribing
    {
        /**
         * Returns a string representation of the object.
         */
        public function toString() : string;
    }
    /**
     * A Test can be run and collect its results.
     */
    interface Test extends \Countable
    {
        /**
         * Runs a test and collects its result in a TestResult instance.
         */
        public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult;
    }
    /**
     * A set of assertion methods.
     */
    abstract class Assert
    {
        /**
         * @var int
         */
        private static $count = 0;
        /**
         * Asserts that an array has a specified key.
         *
         * @param int|string        $key
         * @param array|ArrayAccess $array
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertArrayHasKey($key, $array, string $message = '') : void
        {
        }
        /**
         * Asserts that an array has a specified subset.
         *
         * @param array|ArrayAccess $subset
         * @param array|ArrayAccess $array
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3494
         */
        public static function assertArraySubset($subset, $array, bool $checkForObjectIdentity = false, string $message = '') : void
        {
        }
        /**
         * Asserts that an array does not have a specified key.
         *
         * @param int|string        $key
         * @param array|ArrayAccess $array
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertArrayNotHasKey($key, $array, string $message = '') : void
        {
        }
        /**
         * Asserts that a haystack contains a needle.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertContains($needle, $haystack, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : void
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object contains a needle.
         *
         * @param object|string $haystackClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeContains($needle, string $haystackAttributeName, $haystackClassOrObject, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : void
        {
        }
        /**
         * Asserts that a haystack does not contain a needle.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotContains($needle, $haystack, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : void
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object does not contain a needle.
         *
         * @param object|string $haystackClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotContains($needle, string $haystackAttributeName, $haystackClassOrObject, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : void
        {
        }
        /**
         * Asserts that a haystack contains only values of a given type.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
        {
        }
        /**
         * Asserts that a haystack contains only instances of a given class name.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = '') : void
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object contains only values of a given type.
         *
         * @param object|string $haystackClassOrObject
         * @param bool          $isNativeType
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeContainsOnly(string $type, string $haystackAttributeName, $haystackClassOrObject, ?bool $isNativeType = null, string $message = '') : void
        {
        }
        /**
         * Asserts that a haystack does not contain only values of a given type.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object does not contain only values of a given
         * type.
         *
         * @param object|string $haystackClassOrObject
         * @param bool          $isNativeType
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotContainsOnly(string $type, string $haystackAttributeName, $haystackClassOrObject, ?bool $isNativeType = null, string $message = '') : void
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable.
         *
         * @param Countable|iterable $haystack
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertCount(int $expectedCount, $haystack, string $message = '') : void
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable
         * that is stored in an attribute.
         *
         * @param object|string $haystackClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeCount(int $expectedCount, string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable.
         *
         * @param Countable|iterable $haystack
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotCount(int $expectedCount, $haystack, string $message = '') : void
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable
         * that is stored in an attribute.
         *
         * @param object|string $haystackClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotCount(int $expectedCount, string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that two variables are equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertEquals($expected, $actual, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that two variables are equal (canonicalizing).
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertEqualsCanonicalizing($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that two variables are equal (ignoring case).
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertEqualsIgnoringCase($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that two variables are equal (with delta).
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertEqualsWithDelta($expected, $actual, float $delta, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is equal to an attribute of an object.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeEquals($expected, string $actualAttributeName, $actualClassOrObject, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that two variables are not equal.
         *
         * @param float $delta
         * @param int   $maxDepth
         * @param bool  $canonicalize
         * @param bool  $ignoreCase
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotEquals($expected, $actual, string $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that two variables are not equal (canonicalizing).
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotEqualsCanonicalizing($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that two variables are not equal (ignoring case).
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotEqualsIgnoringCase($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that two variables are not equal (with delta).
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotEqualsWithDelta($expected, $actual, float $delta, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not equal to an attribute of an object.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotEquals($expected, string $actualAttributeName, $actualClassOrObject, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that a variable is empty.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertEmpty($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a static attribute of a class or an attribute of an object
         * is empty.
         *
         * @param object|string $haystackClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeEmpty(string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not empty.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotEmpty($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a static attribute of a class or an attribute of an object
         * is not empty.
         *
         * @param object|string $haystackClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotEmpty(string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a value is greater than another value.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertGreaterThan($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is greater than another value.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeGreaterThan($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a value is greater than or equal to another value.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertGreaterThanOrEqual($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is greater than or equal to another value.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeGreaterThanOrEqual($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a value is smaller than another value.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertLessThan($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is smaller than another value.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeLessThan($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a value is smaller than or equal to another value.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertLessThanOrEqual($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is smaller than or equal to another value.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeLessThanOrEqual($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that the contents of one file is equal to the contents of another
         * file.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileEquals(string $expected, string $actual, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that the contents of one file is not equal to the contents of
         * another file.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileNotEquals(string $expected, string $actual, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that the contents of a string is equal
         * to the contents of a file.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that the contents of a string is not equal
         * to the contents of a file.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void
        {
        }
        /**
         * Asserts that a file/dir is readable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertIsReadable(string $filename, string $message = '') : void
        {
        }
        /**
         * Asserts that a file/dir exists and is not readable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotIsReadable(string $filename, string $message = '') : void
        {
        }
        /**
         * Asserts that a file/dir exists and is writable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertIsWritable(string $filename, string $message = '') : void
        {
        }
        /**
         * Asserts that a file/dir exists and is not writable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotIsWritable(string $filename, string $message = '') : void
        {
        }
        /**
         * Asserts that a directory exists.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertDirectoryExists(string $directory, string $message = '') : void
        {
        }
        /**
         * Asserts that a directory does not exist.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertDirectoryNotExists(string $directory, string $message = '') : void
        {
        }
        /**
         * Asserts that a directory exists and is readable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertDirectoryIsReadable(string $directory, string $message = '') : void
        {
        }
        /**
         * Asserts that a directory exists and is not readable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertDirectoryNotIsReadable(string $directory, string $message = '') : void
        {
        }
        /**
         * Asserts that a directory exists and is writable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertDirectoryIsWritable(string $directory, string $message = '') : void
        {
        }
        /**
         * Asserts that a directory exists and is not writable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertDirectoryNotIsWritable(string $directory, string $message = '') : void
        {
        }
        /**
         * Asserts that a file exists.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileExists(string $filename, string $message = '') : void
        {
        }
        /**
         * Asserts that a file does not exist.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileNotExists(string $filename, string $message = '') : void
        {
        }
        /**
         * Asserts that a file exists and is readable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileIsReadable(string $file, string $message = '') : void
        {
        }
        /**
         * Asserts that a file exists and is not readable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileNotIsReadable(string $file, string $message = '') : void
        {
        }
        /**
         * Asserts that a file exists and is writable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileIsWritable(string $file, string $message = '') : void
        {
        }
        /**
         * Asserts that a file exists and is not writable.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFileNotIsWritable(string $file, string $message = '') : void
        {
        }
        /**
         * Asserts that a condition is true.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertTrue($condition, string $message = '') : void
        {
        }
        /**
         * Asserts that a condition is not true.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotTrue($condition, string $message = '') : void
        {
        }
        /**
         * Asserts that a condition is false.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFalse($condition, string $message = '') : void
        {
        }
        /**
         * Asserts that a condition is not false.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotFalse($condition, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is null.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNull($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not null.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotNull($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is finite.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertFinite($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is infinite.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertInfinite($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is nan.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNan($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a class has a specified attribute.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertClassHasAttribute(string $attributeName, string $className, string $message = '') : void
        {
        }
        /**
         * Asserts that a class does not have a specified attribute.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertClassNotHasAttribute(string $attributeName, string $className, string $message = '') : void
        {
        }
        /**
         * Asserts that a class has a specified static attribute.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
        {
        }
        /**
         * Asserts that a class does not have a specified static attribute.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
        {
        }
        /**
         * Asserts that an object has a specified attribute.
         *
         * @param object $object
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertObjectHasAttribute(string $attributeName, $object, string $message = '') : void
        {
        }
        /**
         * Asserts that an object does not have a specified attribute.
         *
         * @param object $object
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertObjectNotHasAttribute(string $attributeName, $object, string $message = '') : void
        {
        }
        /**
         * Asserts that two variables have the same type and value.
         * Used on objects, it asserts that two variables reference
         * the same object.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertSame($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable and an attribute of an object have the same type
         * and value.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeSame($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that two variables do not have the same type and value.
         * Used on objects, it asserts that two variables do not reference
         * the same object.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotSame($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable and an attribute of an object do not have the
         * same type and value.
         *
         * @param object|string $actualClassOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotSame($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of a given type.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertInstanceOf(string $expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param object|string $classOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeInstanceOf(string $expected, string $attributeName, $classOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of a given type.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotInstanceOf(string $expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param object|string $classOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotInstanceOf(string $expected, string $attributeName, $classOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of a given type.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3369
         */
        public static function assertInternalType(string $expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param object|string $classOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeInternalType(string $expected, string $attributeName, $classOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type array.
         */
        public static function assertIsArray($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type bool.
         */
        public static function assertIsBool($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type float.
         */
        public static function assertIsFloat($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type int.
         */
        public static function assertIsInt($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type numeric.
         */
        public static function assertIsNumeric($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type object.
         */
        public static function assertIsObject($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type resource.
         */
        public static function assertIsResource($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type string.
         */
        public static function assertIsString($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type scalar.
         */
        public static function assertIsScalar($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type callable.
         */
        public static function assertIsCallable($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is of type iterable.
         */
        public static function assertIsIterable($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of a given type.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3369
         */
        public static function assertNotInternalType(string $expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type array.
         */
        public static function assertIsNotArray($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type bool.
         */
        public static function assertIsNotBool($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type float.
         */
        public static function assertIsNotFloat($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type int.
         */
        public static function assertIsNotInt($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type numeric.
         */
        public static function assertIsNotNumeric($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type object.
         */
        public static function assertIsNotObject($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type resource.
         */
        public static function assertIsNotResource($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type string.
         */
        public static function assertIsNotString($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type scalar.
         */
        public static function assertIsNotScalar($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type callable.
         */
        public static function assertIsNotCallable($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a variable is not of type iterable.
         */
        public static function assertIsNotIterable($actual, string $message = '') : void
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param object|string $classOrObject
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function assertAttributeNotInternalType(string $expected, string $attributeName, $classOrObject, string $message = '') : void
        {
        }
        /**
         * Asserts that a string matches a given regular expression.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertRegExp(string $pattern, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that a string does not match a given regular expression.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotRegExp(string $pattern, string $string, string $message = '') : void
        {
        }
        /**
         * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
         * is the same.
         *
         * @param Countable|iterable $expected
         * @param Countable|iterable $actual
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertSameSize($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
         * is not the same.
         *
         * @param Countable|iterable $expected
         * @param Countable|iterable $actual
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertNotSameSize($expected, $actual, string $message = '') : void
        {
        }
        /**
         * Asserts that a string matches a given format string.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringMatchesFormat(string $format, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that a string does not match a given format string.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringNotMatchesFormat(string $format, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that a string matches a given format file.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that a string does not match a given format string.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that a string starts with a given prefix.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringStartsWith(string $prefix, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that a string starts not with a given prefix.
         *
         * @param string $prefix
         * @param string $string
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringStartsNotWith($prefix, $string, string $message = '') : void
        {
        }
        public static function assertStringContainsString(string $needle, string $haystack, string $message = '') : void
        {
        }
        public static function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
        {
        }
        public static function assertStringNotContainsString(string $needle, string $haystack, string $message = '') : void
        {
        }
        public static function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
        {
        }
        /**
         * Asserts that a string ends with a given suffix.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringEndsWith(string $suffix, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that a string ends not with a given suffix.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertStringEndsNotWith(string $suffix, string $string, string $message = '') : void
        {
        }
        /**
         * Asserts that two XML files are equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
        {
        }
        /**
         * Asserts that two XML files are not equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
        {
        }
        /**
         * Asserts that two XML documents are equal.
         *
         * @param DOMDocument|string $actualXml
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertXmlStringEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
        {
        }
        /**
         * Asserts that two XML documents are not equal.
         *
         * @param DOMDocument|string $actualXml
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertXmlStringNotEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
        {
        }
        /**
         * Asserts that two XML documents are equal.
         *
         * @param DOMDocument|string $expectedXml
         * @param DOMDocument|string $actualXml
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertXmlStringEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
        {
        }
        /**
         * Asserts that two XML documents are not equal.
         *
         * @param DOMDocument|string $expectedXml
         * @param DOMDocument|string $actualXml
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
        {
        }
        /**
         * Asserts that a hierarchy of DOMElements matches.
         *
         * @throws AssertionFailedError
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertEqualXMLStructure(\DOMElement $expectedElement, \DOMElement $actualElement, bool $checkAttributes = false, string $message = '') : void
        {
        }
        /**
         * Evaluates a PHPUnit\Framework\Constraint matcher object.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertThat($value, \PHPUnit\Framework\Constraint\Constraint $constraint, string $message = '') : void
        {
        }
        /**
         * Asserts that a string is a valid JSON string.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertJson(string $actualJson, string $message = '') : void
        {
        }
        /**
         * Asserts that two given JSON encoded objects or arrays are equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void
        {
        }
        /**
         * Asserts that two given JSON encoded objects or arrays are not equal.
         *
         * @param string $expectedJson
         * @param string $actualJson
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, string $message = '') : void
        {
        }
        /**
         * Asserts that the generated JSON encoded object and the content of the given file are equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
        {
        }
        /**
         * Asserts that the generated JSON encoded object and the content of the given file are not equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
        {
        }
        /**
         * Asserts that two JSON files are equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
        {
        }
        /**
         * Asserts that two JSON files are not equal.
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public static function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
        {
        }
        public static function logicalAnd() : \PHPUnit\Framework\Constraint\LogicalAnd
        {
        }
        public static function logicalOr() : \PHPUnit\Framework\Constraint\LogicalOr
        {
        }
        public static function logicalNot(\PHPUnit\Framework\Constraint\Constraint $constraint) : \PHPUnit\Framework\Constraint\LogicalNot
        {
        }
        public static function logicalXor() : \PHPUnit\Framework\Constraint\LogicalXor
        {
        }
        public static function anything() : \PHPUnit\Framework\Constraint\IsAnything
        {
        }
        public static function isTrue() : \PHPUnit\Framework\Constraint\IsTrue
        {
        }
        public static function callback(callable $callback) : \PHPUnit\Framework\Constraint\Callback
        {
        }
        public static function isFalse() : \PHPUnit\Framework\Constraint\IsFalse
        {
        }
        public static function isJson() : \PHPUnit\Framework\Constraint\IsJson
        {
        }
        public static function isNull() : \PHPUnit\Framework\Constraint\IsNull
        {
        }
        public static function isFinite() : \PHPUnit\Framework\Constraint\IsFinite
        {
        }
        public static function isInfinite() : \PHPUnit\Framework\Constraint\IsInfinite
        {
        }
        public static function isNan() : \PHPUnit\Framework\Constraint\IsNan
        {
        }
        /**
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function attribute(\PHPUnit\Framework\Constraint\Constraint $constraint, string $attributeName) : \PHPUnit\Framework\Constraint\Attribute
        {
        }
        public static function contains($value, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : \PHPUnit\Framework\Constraint\TraversableContains
        {
        }
        public static function containsOnly(string $type) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
        {
        }
        public static function containsOnlyInstancesOf(string $className) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
        {
        }
        /**
         * @param int|string $key
         */
        public static function arrayHasKey($key) : \PHPUnit\Framework\Constraint\ArrayHasKey
        {
        }
        public static function equalTo($value, float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : \PHPUnit\Framework\Constraint\IsEqual
        {
        }
        /**
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function attributeEqualTo(string $attributeName, $value, float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : \PHPUnit\Framework\Constraint\Attribute
        {
        }
        public static function isEmpty() : \PHPUnit\Framework\Constraint\IsEmpty
        {
        }
        public static function isWritable() : \PHPUnit\Framework\Constraint\IsWritable
        {
        }
        public static function isReadable() : \PHPUnit\Framework\Constraint\IsReadable
        {
        }
        public static function directoryExists() : \PHPUnit\Framework\Constraint\DirectoryExists
        {
        }
        public static function fileExists() : \PHPUnit\Framework\Constraint\FileExists
        {
        }
        public static function greaterThan($value) : \PHPUnit\Framework\Constraint\GreaterThan
        {
        }
        public static function greaterThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
        {
        }
        public static function classHasAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasAttribute
        {
        }
        public static function classHasStaticAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasStaticAttribute
        {
        }
        public static function objectHasAttribute($attributeName) : \PHPUnit\Framework\Constraint\ObjectHasAttribute
        {
        }
        public static function identicalTo($value) : \PHPUnit\Framework\Constraint\IsIdentical
        {
        }
        public static function isInstanceOf(string $className) : \PHPUnit\Framework\Constraint\IsInstanceOf
        {
        }
        public static function isType(string $type) : \PHPUnit\Framework\Constraint\IsType
        {
        }
        public static function lessThan($value) : \PHPUnit\Framework\Constraint\LessThan
        {
        }
        public static function lessThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
        {
        }
        public static function matchesRegularExpression(string $pattern) : \PHPUnit\Framework\Constraint\RegularExpression
        {
        }
        public static function matches(string $string) : \PHPUnit\Framework\Constraint\StringMatchesFormatDescription
        {
        }
        public static function stringStartsWith($prefix) : \PHPUnit\Framework\Constraint\StringStartsWith
        {
        }
        public static function stringContains(string $string, bool $case = true) : \PHPUnit\Framework\Constraint\StringContains
        {
        }
        public static function stringEndsWith(string $suffix) : \PHPUnit\Framework\Constraint\StringEndsWith
        {
        }
        public static function countOf(int $count) : \PHPUnit\Framework\Constraint\Count
        {
        }
        /**
         * Fails a test with the given message.
         *
         * @throws AssertionFailedError
         */
        public static function fail(string $message = '') : void
        {
        }
        /**
         * Returns the value of an attribute of a class or an object.
         * This also works for attributes that are declared protected or private.
         *
         * @param object|string $classOrObject
         *
         * @throws Exception
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function readAttribute($classOrObject, string $attributeName)
        {
        }
        /**
         * Returns the value of a static attribute.
         * This also works for attributes that are declared protected or private.
         *
         * @throws Exception
         * @throws ReflectionException
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function getStaticAttribute(string $className, string $attributeName)
        {
        }
        /**
         * Returns the value of an object's attribute.
         * This also works for attributes that are declared protected or private.
         *
         * @param object $object
         *
         * @throws Exception
         *
         * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
         */
        public static function getObjectAttribute($object, string $attributeName)
        {
        }
        /**
         * Mark the test as incomplete.
         *
         * @throws IncompleteTestError
         */
        public static function markTestIncomplete(string $message = '') : void
        {
        }
        /**
         * Mark the test as skipped.
         *
         * @throws SkippedTestError
         */
        public static function markTestSkipped(string $message = '') : void
        {
        }
        /**
         * Return the current assertion count.
         */
        public static function getCount() : int
        {
        }
        /**
         * Reset the assertion counter.
         */
        public static function resetCount() : void
        {
        }
        private static function isValidObjectAttributeName(string $attributeName) : bool
        {
        }
        private static function isValidClassAttributeName(string $attributeName) : bool
        {
        }
        private static function createWarning(string $warning) : void
        {
        }
    }
    abstract class TestCase extends \PHPUnit\Framework\Assert implements \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
    {
        private const LOCALE_CATEGORIES = [\LC_ALL, \LC_COLLATE, \LC_CTYPE, \LC_MONETARY, \LC_NUMERIC, \LC_TIME];
        /**
         * @var bool
         */
        protected $backupGlobals;
        /**
         * @var array
         */
        protected $backupGlobalsBlacklist = [];
        /**
         * @var bool
         */
        protected $backupStaticAttributes;
        /**
         * @var array
         */
        protected $backupStaticAttributesBlacklist = [];
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess;
        /**
         * @var bool
         */
        protected $preserveGlobalState = true;
        /**
         * @var bool
         */
        private $runClassInSeparateProcess;
        /**
         * @var bool
         */
        private $inIsolation = false;
        /**
         * @var array
         */
        private $data;
        /**
         * @var string
         */
        private $dataName;
        /**
         * @var bool
         */
        private $useErrorHandler;
        /**
         * @var null|string
         */
        private $expectedException;
        /**
         * @var null|string
         */
        private $expectedExceptionMessage;
        /**
         * @var null|string
         */
        private $expectedExceptionMessageRegExp;
        /**
         * @var null|int|string
         */
        private $expectedExceptionCode;
        /**
         * @var string
         */
        private $name;
        /**
         * @var string[]
         */
        private $dependencies = [];
        /**
         * @var array
         */
        private $dependencyInput = [];
        /**
         * @var array
         */
        private $iniSettings = [];
        /**
         * @var array
         */
        private $locale = [];
        /**
         * @var array
         */
        private $mockObjects = [];
        /**
         * @var MockGenerator
         */
        private $mockObjectGenerator;
        /**
         * @var int
         */
        private $status = \PHPUnit\Runner\BaseTestRunner::STATUS_UNKNOWN;
        /**
         * @var string
         */
        private $statusMessage = '';
        /**
         * @var int
         */
        private $numAssertions = 0;
        /**
         * @var TestResult
         */
        private $result;
        /**
         * @var mixed
         */
        private $testResult;
        /**
         * @var string
         */
        private $output = '';
        /**
         * @var string
         */
        private $outputExpectedRegex;
        /**
         * @var string
         */
        private $outputExpectedString;
        /**
         * @var mixed
         */
        private $outputCallback = false;
        /**
         * @var bool
         */
        private $outputBufferingActive = false;
        /**
         * @var int
         */
        private $outputBufferingLevel;
        /**
         * @var Snapshot
         */
        private $snapshot;
        /**
         * @var Prophecy\Prophet
         */
        private $prophet;
        /**
         * @var bool
         */
        private $beStrictAboutChangesToGlobalState = false;
        /**
         * @var bool
         */
        private $registerMockObjectsFromTestArgumentsRecursively = false;
        /**
         * @var string[]
         */
        private $warnings = [];
        /**
         * @var array
         */
        private $groups = [];
        /**
         * @var bool
         */
        private $doesNotPerformAssertions = false;
        /**
         * @var Comparator[]
         */
        private $customComparators = [];
        /**
         * Returns a matcher that matches when the method is executed
         * zero or more times.
         */
        public static function any() : \PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount
        {
        }
        /**
         * Returns a matcher that matches when the method is never executed.
         */
        public static function never() : \PHPUnit\Framework\MockObject\Matcher\InvokedCount
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * at least N times.
         */
        public static function atLeast(int $requiredInvocations) : \PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastCount
        {
        }
        /**
         * Returns a matcher that matches when the method is executed at least once.
         */
        public static function atLeastOnce() : \PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastOnce
        {
        }
        /**
         * Returns a matcher that matches when the method is executed exactly once.
         */
        public static function once() : \PHPUnit\Framework\MockObject\Matcher\InvokedCount
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * exactly $count times.
         */
        public static function exactly(int $count) : \PHPUnit\Framework\MockObject\Matcher\InvokedCount
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * at most N times.
         */
        public static function atMost(int $allowedInvocations) : \PHPUnit\Framework\MockObject\Matcher\InvokedAtMostCount
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * at the given index.
         */
        public static function at(int $index) : \PHPUnit\Framework\MockObject\Matcher\InvokedAtIndex
        {
        }
        public static function returnValue($value) : \PHPUnit\Framework\MockObject\Stub\ReturnStub
        {
        }
        public static function returnValueMap(array $valueMap) : \PHPUnit\Framework\MockObject\Stub\ReturnValueMap
        {
        }
        public static function returnArgument(int $argumentIndex) : \PHPUnit\Framework\MockObject\Stub\ReturnArgument
        {
        }
        public static function returnCallback($callback) : \PHPUnit\Framework\MockObject\Stub\ReturnCallback
        {
        }
        /**
         * Returns the current object.
         *
         * This method is useful when mocking a fluent interface.
         */
        public static function returnSelf() : \PHPUnit\Framework\MockObject\Stub\ReturnSelf
        {
        }
        public static function throwException(\Throwable $exception) : \PHPUnit\Framework\MockObject\Stub\Exception
        {
        }
        public static function onConsecutiveCalls(...$args) : \PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls
        {
        }
        /**
         * @param string $name
         * @param string $dataName
         */
        public function __construct($name = null, array $data = [], $dataName = '')
        {
        }
        /**
         * This method is called before the first test of this test class is run.
         */
        public static function setUpBeforeClass()
        {
        }
        /**
         * This method is called after the last test of this test class is run.
         */
        public static function tearDownAfterClass()
        {
        }
        /**
         * This method is called before each test.
         */
        protected function setUp()
        {
        }
        /**
         * This method is called after each test.
         */
        protected function tearDown()
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws \ReflectionException
         */
        public function toString() : string
        {
        }
        public function count() : int
        {
        }
        public function getGroups() : array
        {
        }
        public function setGroups(array $groups) : void
        {
        }
        public function getAnnotations() : array
        {
        }
        /**
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function getName(bool $withDataSet = true) : ?string
        {
        }
        /**
         * Returns the size of the test.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function getSize() : int
        {
        }
        /**
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function hasSize() : bool
        {
        }
        /**
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function isSmall() : bool
        {
        }
        /**
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function isMedium() : bool
        {
        }
        /**
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function isLarge() : bool
        {
        }
        public function getActualOutput() : string
        {
        }
        public function hasOutput() : bool
        {
        }
        public function doesNotPerformAssertions() : bool
        {
        }
        public function expectOutputRegex(string $expectedRegex) : void
        {
        }
        public function expectOutputString(string $expectedString) : void
        {
        }
        public function hasExpectationOnOutput() : bool
        {
        }
        public function getExpectedException() : ?string
        {
        }
        /**
         * @return null|int|string
         */
        public function getExpectedExceptionCode()
        {
        }
        public function getExpectedExceptionMessage() : ?string
        {
        }
        public function getExpectedExceptionMessageRegExp() : ?string
        {
        }
        public function expectException(string $exception) : void
        {
        }
        /**
         * @param int|string $code
         */
        public function expectExceptionCode($code) : void
        {
        }
        public function expectExceptionMessage(string $message) : void
        {
        }
        public function expectExceptionMessageRegExp(string $messageRegExp) : void
        {
        }
        /**
         * Sets up an expectation for an exception to be raised by the code under test.
         * Information for expected exception class, expected exception message, and
         * expected exception code are retrieved from a given Exception object.
         */
        public function expectExceptionObject(\Exception $exception) : void
        {
        }
        public function expectNotToPerformAssertions()
        {
        }
        public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void
        {
        }
        public function setUseErrorHandler(bool $useErrorHandler) : void
        {
        }
        public function getStatus() : int
        {
        }
        public function markAsRisky() : void
        {
        }
        public function getStatusMessage() : string
        {
        }
        public function hasFailed() : bool
        {
        }
        /**
         * Runs the test case and collects the results in a TestResult object.
         * If no TestResult object is passed a new one will be created.
         *
         * @throws CodeCoverageException
         * @throws ReflectionException
         * @throws \SebastianBergmann\CodeCoverage\CoveredCodeNotExecutedException
         * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
         * @throws \SebastianBergmann\CodeCoverage\MissingCoversAnnotationException
         * @throws \SebastianBergmann\CodeCoverage\RuntimeException
         * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
        {
        }
        /**
         * @throws \Throwable
         */
        public function runBare() : void
        {
        }
        public function setName(string $name) : void
        {
        }
        /**
         * @param string[] $dependencies
         */
        public function setDependencies(array $dependencies) : void
        {
        }
        public function getDependencies() : array
        {
        }
        public function hasDependencies() : bool
        {
        }
        public function setDependencyInput(array $dependencyInput) : void
        {
        }
        public function setBeStrictAboutChangesToGlobalState(?bool $beStrictAboutChangesToGlobalState) : void
        {
        }
        public function setBackupGlobals(?bool $backupGlobals) : void
        {
        }
        public function setBackupStaticAttributes(?bool $backupStaticAttributes) : void
        {
        }
        public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void
        {
        }
        public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess) : void
        {
        }
        public function setPreserveGlobalState(bool $preserveGlobalState) : void
        {
        }
        public function setInIsolation(bool $inIsolation) : void
        {
        }
        public function isInIsolation() : bool
        {
        }
        public function getResult()
        {
        }
        public function setResult($result) : void
        {
        }
        public function setOutputCallback(callable $callback) : void
        {
        }
        public function getTestResultObject() : ?\PHPUnit\Framework\TestResult
        {
        }
        public function setTestResultObject(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject) : void
        {
        }
        /**
         * Returns a builder object to create mock objects using a fluent interface.
         *
         * @param string|string[] $className
         */
        public function getMockBuilder($className) : \PHPUnit\Framework\MockObject\MockBuilder
        {
        }
        public function addToAssertionCount(int $count) : void
        {
        }
        /**
         * Returns the number of assertions performed by this test.
         */
        public function getNumAssertions() : int
        {
        }
        public function usesDataProvider() : bool
        {
        }
        public function dataDescription() : string
        {
        }
        /**
         * @return int|string
         */
        public function dataName()
        {
        }
        public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator) : void
        {
        }
        public function getDataSetAsString(bool $includeData = true) : string
        {
        }
        /**
         * Gets the data set of a TestCase.
         */
        public function getProvidedData() : array
        {
        }
        public function addWarning(string $warning) : void
        {
        }
        /**
         * Override to run the test and assert its state.
         *
         * @throws AssertionFailedError
         * @throws Exception
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
         * @throws Throwable
         */
        protected function runTest()
        {
        }
        /**
         * This method is a wrapper for the ini_set() function that automatically
         * resets the modified php.ini setting to its original value after the
         * test is run.
         *
         * @throws Exception
         */
        protected function iniSet(string $varName, $newValue) : void
        {
        }
        /**
         * This method is a wrapper for the setlocale() function that automatically
         * resets the locale to its original value after the test is run.
         *
         * @throws Exception
         */
        protected function setLocale(...$args) : void
        {
        }
        /**
         * Returns a test double for the specified class.
         *
         * @param string|string[] $originalClassName
         *
         * @throws Exception
         * @throws \InvalidArgumentException
         */
        protected function createMock($originalClassName) : \PHPUnit\Framework\MockObject\MockObject
        {
        }
        /**
         * Returns a configured test double for the specified class.
         *
         * @param string|string[] $originalClassName
         *
         * @throws Exception
         * @throws \InvalidArgumentException
         */
        protected function createConfiguredMock($originalClassName, array $configuration) : \PHPUnit\Framework\MockObject\MockObject
        {
        }
        /**
         * Returns a partial test double for the specified class.
         *
         * @param string|string[] $originalClassName
         * @param string[]        $methods
         *
         * @throws Exception
         * @throws \InvalidArgumentException
         */
        protected function createPartialMock($originalClassName, array $methods) : \PHPUnit\Framework\MockObject\MockObject
        {
        }
        /**
         * Returns a test proxy for the specified class.
         *
         * @throws Exception
         * @throws \InvalidArgumentException
         */
        protected function createTestProxy(string $originalClassName, array $constructorArguments = []) : \PHPUnit\Framework\MockObject\MockObject
        {
        }
        /**
         * Mocks the specified class and returns the name of the mocked class.
         *
         * @param string $originalClassName
         * @param array  $methods
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param bool   $cloneArguments
         *
         * @throws Exception
         * @throws ReflectionException
         * @throws \InvalidArgumentException
         */
        protected function getMockClass($originalClassName, $methods = [], array $arguments = [], $mockClassName = '', $callOriginalConstructor = false, $callOriginalClone = true, $callAutoload = true, $cloneArguments = false) : string
        {
        }
        /**
         * Returns a mock object for the specified abstract class with all abstract
         * methods of the class mocked. Concrete methods are not mocked by default.
         * To mock concrete methods, use the 7th parameter ($mockedMethods).
         *
         * @param string $originalClassName
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param array  $mockedMethods
         * @param bool   $cloneArguments
         *
         * @throws Exception
         * @throws ReflectionException
         * @throws \InvalidArgumentException
         */
        protected function getMockForAbstractClass($originalClassName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject
        {
        }
        /**
         * Returns a mock object based on the given WSDL file.
         *
         * @param string $wsdlFile
         * @param string $originalClassName
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param array  $options                 An array of options passed to SOAPClient::_construct
         *
         * @throws Exception
         * @throws ReflectionException
         * @throws \InvalidArgumentException
         */
        protected function getMockFromWsdl($wsdlFile, $originalClassName = '', $mockClassName = '', array $methods = [], $callOriginalConstructor = true, array $options = []) : \PHPUnit\Framework\MockObject\MockObject
        {
        }
        /**
         * Returns a mock object for the specified trait with all abstract methods
         * of the trait mocked. Concrete methods to mock can be specified with the
         * `$mockedMethods` parameter.
         *
         * @param string $traitName
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param array  $mockedMethods
         * @param bool   $cloneArguments
         *
         * @throws Exception
         * @throws ReflectionException
         * @throws \InvalidArgumentException
         */
        protected function getMockForTrait($traitName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject
        {
        }
        /**
         * Returns an object for the specified trait.
         *
         * @param string $traitName
         * @param string $traitClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         *
         * @throws Exception
         * @throws ReflectionException
         * @throws \InvalidArgumentException
         *
         * @return object
         */
        protected function getObjectForTrait($traitName, array $arguments = [], $traitClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true)
        {
        }
        /**
         * @param null|string $classOrInterface
         *
         * @throws Prophecy\Exception\Doubler\ClassNotFoundException
         * @throws Prophecy\Exception\Doubler\DoubleException
         * @throws Prophecy\Exception\Doubler\InterfaceNotFoundException
         */
        protected function prophesize($classOrInterface = null) : \Prophecy\Prophecy\ObjectProphecy
        {
        }
        /**
         * Creates a default TestResult object.
         */
        protected function createResult() : \PHPUnit\Framework\TestResult
        {
        }
        /**
         * Performs assertions shared by all tests of a test case.
         *
         * This method is called between setUp() and test.
         */
        protected function assertPreConditions()
        {
        }
        /**
         * Performs assertions shared by all tests of a test case.
         *
         * This method is called between test and tearDown().
         */
        protected function assertPostConditions()
        {
        }
        /**
         * This method is called when a test method did not execute successfully.
         *
         * @throws Throwable
         */
        protected function onNotSuccessfulTest(\Throwable $t)
        {
        }
        private function setExpectedExceptionFromAnnotation() : void
        {
        }
        private function setUseErrorHandlerFromAnnotation() : void
        {
        }
        private function checkRequirements() : void
        {
        }
        private function verifyMockObjects() : void
        {
        }
        private function handleDependencies() : bool
        {
        }
        private function markSkippedForMissingDependecy(string $dependency) : void
        {
        }
        private function markWarningForUncallableDependency(string $dependency) : void
        {
        }
        /**
         * Get the mock object generator, creating it if it doesn't exist.
         */
        private function getMockObjectGenerator() : \PHPUnit\Framework\MockObject\Generator
        {
        }
        private function startOutputBuffering() : void
        {
        }
        /**
         * @throws RiskyTestError
         */
        private function stopOutputBuffering() : void
        {
        }
        private function snapshotGlobalState() : void
        {
        }
        /**
         * @throws RiskyTestError
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws \InvalidArgumentException
         */
        private function restoreGlobalState() : void
        {
        }
        private function createGlobalStateSnapshot(bool $backupGlobals) : \SebastianBergmann\GlobalState\Snapshot
        {
        }
        /**
         * @throws RiskyTestError
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws \InvalidArgumentException
         */
        private function compareGlobalStateSnapshots(\SebastianBergmann\GlobalState\Snapshot $before, \SebastianBergmann\GlobalState\Snapshot $after) : void
        {
        }
        /**
         * @throws RiskyTestError
         */
        private function compareGlobalStateSnapshotPart(array $before, array $after, string $header) : void
        {
        }
        private function getProphet() : \Prophecy\Prophet
        {
        }
        /**
         * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
         */
        private function shouldInvocationMockerBeReset(\PHPUnit\Framework\MockObject\MockObject $mock) : bool
        {
        }
        /**
         * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
         * @throws \SebastianBergmann\ObjectReflector\InvalidArgumentException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        private function registerMockObjectsFromTestArguments(array $testArguments, array &$visited = []) : void
        {
        }
        private function setDoesNotPerformAssertionsFromAnnotation() : void
        {
        }
        private function isCloneable(\PHPUnit\Framework\MockObject\MockObject $testArgument) : bool
        {
        }
        private function unregisterCustomComparators() : void
        {
        }
        private function cleanupIniSettings() : void
        {
        }
        private function cleanupLocaleSettings() : void
        {
        }
        /**
         * @throws ReflectionException
         */
        private function checkExceptionExpectations(\Throwable $throwable) : bool
        {
        }
        private function runInSeparateProcess() : bool
        {
        }
    }
}
namespace PHPUnit\TextUI {
    class TestRunnerTest extends \PHPUnit\Framework\TestCase
    {
        public function testTestIsRunnable() : void
        {
        }
        public function testSuiteIsRunnable() : void
        {
        }
        /**
         * @return \PHPUnit\TextUI\ResultPrinter
         */
        private function getResultPrinterMock()
        {
        }
        /**
         * @return \PHPUnit\Framework\TestSuite
         */
        private function getSuiteMock()
        {
        }
    }
}
namespace {
    /**
     * @group test-reorder
     */
    class TestResultCacheTest extends \PHPUnit\Framework\TestCase
    {
        public function testReadsCacheFromProvidedFilename() : void
        {
        }
        public function testDoesClearCacheBeforeLoad() : void
        {
        }
        public function testShouldNotSerializePassedTestsAsDefectButTimeIsStored() : void
        {
        }
        public function testCanPersistCacheToFile() : void
        {
        }
        public function testShouldReturnEmptyCacheWhenFileDoesNotExist() : void
        {
        }
        public function testShouldReturnEmptyCacheFromInvalidFile() : void
        {
        }
        public function isSerializedEmptyCache(string $data) : bool
        {
        }
    }
}
namespace PHPUnit\Util {
    class ConfigurationGeneratorTest extends \PHPUnit\Framework\TestCase
    {
        public function testGeneratesConfigurationCorrectly() : void
        {
        }
    }
    class XDebugFilterScriptGeneratorTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers \PHPUnit\Util\XdebugFilterScriptGenerator::generate
         */
        public function testReturnsExpectedScript() : void
        {
        }
    }
    class TestTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @todo Split up in separate tests
         */
        public function testGetExpectedException() : void
        {
        }
        public function testGetExpectedRegExp() : void
        {
        }
        /**
         * @dataProvider requirementsProvider
         *
         * @throws Warning
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testGetRequirements($test, $result) : void
        {
        }
        public function requirementsProvider() : array
        {
        }
        /**
         * @dataProvider requirementsWithVersionConstraintsProvider
         *
         * @throws Exception
         * @throws Warning
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testGetRequirementsWithVersionConstraints($test, array $result) : void
        {
        }
        public function requirementsWithVersionConstraintsProvider() : array
        {
        }
        /**
         * @dataProvider requirementsWithInvalidVersionConstraintsThrowsExceptionProvider
         *
         * @throws Warning
         */
        public function testGetRequirementsWithInvalidVersionConstraintsThrowsException($test) : void
        {
        }
        public function requirementsWithInvalidVersionConstraintsThrowsExceptionProvider() : array
        {
        }
        public function testGetRequirementsMergesClassAndMethodDocBlocks() : void
        {
        }
        /**
         * @dataProvider missingRequirementsProvider
         *
         * @throws Warning
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testGetMissingRequirements($test, $result) : void
        {
        }
        public function missingRequirementsProvider() : array
        {
        }
        /**
         * @todo This test does not really test functionality of \PHPUnit\Util\Test
         */
        public function testGetProvidedDataRegEx() : void
        {
        }
        /**
         * Check if all data providers are being merged.
         */
        public function testMultipleDataProviders() : void
        {
        }
        public function testMultipleYieldIteratorDataProviders() : void
        {
        }
        public function testWithVariousIterableDataProviders() : void
        {
        }
        public function testTestWithEmptyAnnotation() : void
        {
        }
        public function testTestWithSimpleCase() : void
        {
        }
        public function testTestWithMultiLineMultiParameterCase() : void
        {
        }
        public function testTestWithVariousTypes() : void
        {
        }
        public function testTestWithAnnotationAfter() : void
        {
        }
        public function testTestWithSimpleTextAfter() : void
        {
        }
        public function testTestWithCharacterEscape() : void
        {
        }
        public function testTestWithThrowsProperExceptionIfDatasetCannotBeParsed() : void
        {
        }
        public function testTestWithThrowsProperExceptionIfMultiLineDatasetCannotBeParsed() : void
        {
        }
        /**
         * @todo Not sure what this test tests (name is misleading at least)
         */
        public function testParseAnnotation() : void
        {
        }
        /**
         * @depends Foo
         * @depends ほげ
         *
         * @todo Remove fixture from test class
         */
        public function methodForTestParseAnnotation() : void
        {
        }
        public function testParseAnnotationThatIsOnlyOneLine() : void
        {
        }
        /** @depends Bar */
        public function methodForTestParseAnnotationThatIsOnlyOneLine() : void
        {
        }
        /**
         * @dataProvider getLinesToBeCoveredProvider
         *
         * @throws CodeCoverageException
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testGetLinesToBeCovered($test, $lines) : void
        {
        }
        public function testGetLinesToBeCovered2() : void
        {
        }
        public function testGetLinesToBeCovered3() : void
        {
        }
        public function testGetLinesToBeCovered4() : void
        {
        }
        public function testGetLinesToBeCoveredSkipsNonExistentMethods() : void
        {
        }
        public function testTwoCoversDefaultClassAnnotationsAreNotAllowed() : void
        {
        }
        public function testFunctionParenthesesAreAllowed() : void
        {
        }
        public function testFunctionParenthesesAreAllowedWithWhitespace() : void
        {
        }
        public function testMethodParenthesesAreAllowed() : void
        {
        }
        public function testMethodParenthesesAreAllowedWithWhitespace() : void
        {
        }
        public function testNamespacedFunctionCanBeCoveredOrUsed() : void
        {
        }
        public function getLinesToBeCoveredProvider() : array
        {
        }
        public function testParseTestMethodAnnotationsIncorporatesTraits() : void
        {
        }
        public function testCoversAnnotationIncludesTraitsUsedByClass() : void
        {
        }
    }
}
namespace PHPUnit\Util\PHP {
    class AbstractPhpProcessTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var AbstractPhpProcess|\PHPUnit\Framework\MockObject\MockObject
         */
        private $phpProcess;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testShouldNotUseStderrRedirectionByDefault() : void
        {
        }
        public function testShouldDefinedIfUseStderrRedirection() : void
        {
        }
        public function testShouldDefinedIfDoNotUseStderrRedirection() : void
        {
        }
        public function testShouldUseGivenSettingsToCreateCommand() : void
        {
        }
        public function testShouldRedirectStderrToStdoutWhenDefined() : void
        {
        }
        public function testShouldUseArgsToCreateCommand() : void
        {
        }
        public function testShouldHaveFileToCreateCommand() : void
        {
        }
        public function testStdinGetterAndSetter() : void
        {
        }
        public function testArgsGetterAndSetter() : void
        {
        }
        public function testEnvGetterAndSetter() : void
        {
        }
        public function testTimeoutGetterAndSetter() : void
        {
        }
    }
}
namespace PHPUnit\Util {
    class GetoptTest extends \PHPUnit\Framework\TestCase
    {
        public function testItIncludeTheLongOptionsAfterTheArgument() : void
        {
        }
        public function testItIncludeTheShortOptionsAfterTheArgument() : void
        {
        }
        public function testShortOptionUnrecognizedException() : void
        {
        }
        public function testShortOptionRequiresAnArgumentException() : void
        {
        }
        public function testShortOptionHandleAnOptionalValue() : void
        {
        }
        public function testLongOptionIsAmbiguousException() : void
        {
        }
        public function testLongOptionUnrecognizedException() : void
        {
        }
        public function testLongOptionRequiresAnArgumentException() : void
        {
        }
        public function testLongOptionDoesNotAllowAnArgumentException() : void
        {
        }
        public function testItHandlesLongParametesWithValues() : void
        {
        }
        public function testItHandlesShortParametesWithValues() : void
        {
        }
    }
    class JsonTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider canonicalizeProvider
         *
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testCanonicalize($actual, $expected, $expectError) : void
        {
        }
        public function canonicalizeProvider() : array
        {
        }
        /**
         * @dataProvider prettifyProvider
         *
         * @throws \PHPUnit\Framework\Exception
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testPrettify($actual, $expected) : void
        {
        }
        public function prettifyProvider() : array
        {
        }
        /**
         * @dataProvider prettifyExceptionProvider
         */
        public function testPrettifyException($json) : void
        {
        }
        public function prettifyExceptionProvider() : array
        {
        }
    }
    class ConfigurationTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var Configuration
         */
        protected $configuration;
        protected function setUp() : void
        {
        }
        public function testExceptionIsThrownForNotExistingConfigurationFile() : void
        {
        }
        public function testShouldReadColorsWhenTrueInConfigurationFile() : void
        {
        }
        public function testShouldReadColorsWhenFalseInConfigurationFile() : void
        {
        }
        public function testShouldReadColorsWhenEmptyInConfigurationFile() : void
        {
        }
        public function testShouldReadColorsWhenInvalidInConfigurationFile() : void
        {
        }
        public function testInvalidConfigurationGeneratesValidationErrors() : void
        {
        }
        public function testShouldUseDefaultValuesForInvalidIntegers() : void
        {
        }
        /**
         * @dataProvider configurationRootOptionsProvider
         *
         * @group test-reorder
         *
         * @param bool|int|string $expected
         */
        public function testShouldParseXmlConfigurationRootAttributes(string $optionName, string $optionValue, $expected) : void
        {
        }
        public function configurationRootOptionsProvider() : array
        {
        }
        public function testShouldParseXmlConfigurationExecutionOrderCombined() : void
        {
        }
        public function testFilterConfigurationIsReadCorrectly() : void
        {
        }
        public function testGroupConfigurationIsReadCorrectly() : void
        {
        }
        public function testTestdoxGroupConfigurationIsReadCorrectly() : void
        {
        }
        public function testListenerConfigurationIsReadCorrectly() : void
        {
        }
        public function testExtensionConfigurationIsReadCorrectly() : void
        {
        }
        public function testLoggingConfigurationIsReadCorrectly() : void
        {
        }
        public function testPHPConfigurationIsReadCorrectly() : void
        {
        }
        /**
         * @backupGlobals enabled
         */
        public function testPHPConfigurationIsHandledCorrectly() : void
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/1181
         */
        public function testHandlePHPConfigurationDoesNotOverwrittenExistingEnvArrayVariables() : void
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/2353
         */
        public function testHandlePHPConfigurationDoesForceOverwrittenExistingEnvArrayVariables() : void
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/1181
         */
        public function testHandlePHPConfigurationDoesNotOverriteVariablesFromPutEnv() : void
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/1181
         */
        public function testHandlePHPConfigurationDoesOverwriteVariablesFromPutEnvWhenForced() : void
        {
        }
        public function testPHPUnitConfigurationIsReadCorrectly() : void
        {
        }
        public function testXincludeInConfiguration() : void
        {
        }
        /**
         * @ticket 1311
         */
        public function testWithEmptyConfigurations() : void
        {
        }
        public function testGetTestSuiteNamesReturnsTheNamesIfDefined() : void
        {
        }
        public function testTestSuiteConfigurationForASingleFileInASuite() : void
        {
        }
        /**
         * Asserts that the values in $actualConfiguration equal $expectedConfiguration.
         *
         * @throws Exception
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function assertConfigurationEquals(\PHPUnit\Util\Configuration $expectedConfiguration, \PHPUnit\Util\Configuration $actualConfiguration) : void
        {
        }
    }
}
namespace PHPUnit\Util\TestDox {
    final class CliTestDoxPrinterTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var TestableCliTestDoxPrinter
         */
        private $printer;
        /**
         * @var TestableCliTestDoxPrinter
         */
        private $verbosePrinter;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testPrintsTheClassNameOfTheTestClass() : void
        {
        }
        public function testPrintsThePrettifiedMethodName() : void
        {
        }
        public function testPrintsCheckMarkForSuccessfulTest() : void
        {
        }
        public function testDoesNotPrintAdditionalInformationForSuccessfulTest() : void
        {
        }
        public function testPrintsCrossForTestWithError() : void
        {
        }
        public function testPrintsAdditionalInformationForTestWithError() : void
        {
        }
        public function testPrintsCrossForTestWithWarning() : void
        {
        }
        public function testPrintsAdditionalInformationForTestWithWarning() : void
        {
        }
        public function testPrintsCrossForTestWithFailure() : void
        {
        }
        public function testPrintsAdditionalInformationForTestWithFailure() : void
        {
        }
        public function testPrintsEmptySetSymbolForTestWithFailure() : void
        {
        }
        public function testDoesNotPrintAdditionalInformationForIncompleteTestByDefault() : void
        {
        }
        public function testPrintsAdditionalInformationForIncompleteTestInVerboseMode() : void
        {
        }
        public function testPrintsRadioactiveSymbolForRiskyTest() : void
        {
        }
        public function testDoesNotPrintAdditionalInformationForRiskyTestByDefault() : void
        {
        }
        public function testPrintsAdditionalInformationForRiskyTestInVerboseMode() : void
        {
        }
        public function testPrintsArrowForSkippedTest() : void
        {
        }
        public function testDoesNotPrintAdditionalInformationForSkippedTestByDefault() : void
        {
        }
        public function testPrintsAdditionalInformationForSkippedTestInVerboseMode() : void
        {
        }
    }
    class NamePrettifierTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var NamePrettifier
         */
        private $namePrettifier;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testTitleHasSensibleDefaults() : void
        {
        }
        public function testTestNameIsConvertedToASentence() : void
        {
        }
        /**
         * @ticket 224
         */
        public function testTestNameIsNotGroupedWhenNotInSequence() : void
        {
        }
        public function testPhpDoxIgnoreDataKeys() : void
        {
        }
        public function testPhpDoxUsesDefaultValue() : void
        {
        }
        public function testPhpDoxArgumentExporting() : void
        {
        }
        public function testPhpDoxReplacesLongerVariablesFirst() : void
        {
        }
    }
}
namespace PHPUnit\Util {
    class GlobalStateTest extends \PHPUnit\Framework\TestCase
    {
        public function testIncludedFilesAsStringSkipsVfsProtocols() : void
        {
        }
    }
    class RegularExpressionTest extends \PHPUnit\Framework\TestCase
    {
        public function validRegexpProvider() : array
        {
        }
        public function invalidRegexpProvider() : array
        {
        }
        /**
         * @dataProvider validRegexpProvider
         *
         * @throws \Exception
         * @throws \PHPUnit\Framework\ExpectationFailedException
         */
        public function testValidRegex($pattern, $subject, $return) : void
        {
        }
        /**
         * @dataProvider invalidRegexpProvider
         *
         * @throws \Exception
         * @throws \PHPUnit\Framework\ExpectationFailedException
         */
        public function testInvalidRegex($pattern, $subject) : void
        {
        }
    }
    class XmlTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider charProvider
         */
        public function testPrepareString(string $char) : void
        {
        }
        public function charProvider() : array
        {
        }
        public function testLoadEmptyString() : void
        {
        }
        public function testLoadArray() : void
        {
        }
        public function testLoadBoolean() : void
        {
        }
        public function testNestedXmlToVariable() : void
        {
        }
        public function testXmlToVariableCanHandleMultipleOfTheSameArgumentType() : void
        {
        }
        public function testXmlToVariableCanConstructObjectsWithConstructorArgumentsRecursively() : void
        {
        }
    }
}
namespace {
    /**
     * @group test-reorder
     */
    class NullTestResultCacheTest extends \PHPUnit\Framework\TestCase
    {
        public function testHasWorkingStubs() : void
        {
        }
    }
}
namespace PHPUnit\Framework {
    class AssertTest extends \PHPUnit\Framework\TestCase
    {
        public static function validInvalidJsonDataprovider() : array
        {
        }
        public function testFail() : void
        {
        }
        public function testAssertSplObjectStorageContainsObject() : void
        {
        }
        public function testAssertArrayContainsObject() : void
        {
        }
        public function testAssertArrayContainsString() : void
        {
        }
        public function testAssertArrayContainsNonObject() : void
        {
        }
        public function testAssertContainsOnlyInstancesOf() : void
        {
        }
        public function testAssertContainsPartialStringInString() : void
        {
        }
        public function testAssertContainsNonCaseSensitiveStringInString() : void
        {
        }
        public function testAssertContainsEmptyStringInString() : void
        {
        }
        public function testAssertStringContainsNonString() : void
        {
        }
        public function testAssertStringNotContainsNonString() : void
        {
        }
        public function testAssertArrayHasKeyThrowsExceptionForInvalidFirstArgument() : void
        {
        }
        public function testAssertArrayHasKeyThrowsExceptionForInvalidSecondArgument() : void
        {
        }
        public function testAssertArrayHasIntegerKey() : void
        {
        }
        public function testAssertArraySubset() : void
        {
        }
        public function testAssertArraySubsetWithDeepNestedArrays() : void
        {
        }
        public function testAssertArraySubsetWithNoStrictCheckAndObjects() : void
        {
        }
        public function testAssertArraySubsetWithStrictCheckAndObjects() : void
        {
        }
        /**
         * @dataProvider assertArraySubsetInvalidArgumentProvider
         *
         * @throws Exception
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertArraySubsetRaisesExceptionForInvalidArguments($partial, $subject) : void
        {
        }
        public function assertArraySubsetInvalidArgumentProvider() : array
        {
        }
        public function testAssertArrayNotHasKeyThrowsExceptionForInvalidFirstArgument() : void
        {
        }
        public function testAssertArrayNotHasKeyThrowsExceptionForInvalidSecondArgument() : void
        {
        }
        public function testAssertArrayNotHasIntegerKey() : void
        {
        }
        public function testAssertArrayHasStringKey() : void
        {
        }
        public function testAssertArrayNotHasStringKey() : void
        {
        }
        public function testAssertArrayHasKeyAcceptsArrayObjectValue() : void
        {
        }
        public function testAssertArrayHasKeyProperlyFailsWithArrayObjectValue() : void
        {
        }
        public function testAssertArrayHasKeyAcceptsArrayAccessValue() : void
        {
        }
        public function testAssertArrayHasKeyProperlyFailsWithArrayAccessValue() : void
        {
        }
        public function testAssertArrayNotHasKeyAcceptsArrayAccessValue() : void
        {
        }
        public function testAssertArrayNotHasKeyPropertlyFailsWithArrayAccessValue() : void
        {
        }
        public function testAssertContainsThrowsException() : void
        {
        }
        public function testAssertIteratorContainsObject() : void
        {
        }
        public function testAssertIteratorContainsString() : void
        {
        }
        public function testAssertStringContainsString() : void
        {
        }
        public function testAssertStringContainsStringForUtf8() : void
        {
        }
        public function testAssertStringContainsStringForUtf8WhenIgnoreCase() : void
        {
        }
        public function testAssertNotContainsThrowsException() : void
        {
        }
        public function testAssertSplObjectStorageNotContainsObject() : void
        {
        }
        public function testAssertArrayNotContainsObject() : void
        {
        }
        public function testAssertArrayNotContainsString() : void
        {
        }
        public function testAssertArrayNotContainsNonObject() : void
        {
        }
        public function testAssertStringNotContainsString() : void
        {
        }
        public function testAssertStringNotContainsStringForUtf8() : void
        {
        }
        public function testAssertStringNotContainsStringForUtf8WhenIgnoreCase() : void
        {
        }
        public function testAssertArrayContainsOnlyIntegers() : void
        {
        }
        public function testAssertArrayNotContainsOnlyIntegers() : void
        {
        }
        public function testAssertArrayContainsOnlyStdClass() : void
        {
        }
        public function testAssertArrayNotContainsOnlyStdClass() : void
        {
        }
        public function equalProvider() : array
        {
        }
        public function notEqualProvider()
        {
        }
        public function sameProvider() : array
        {
        }
        public function notSameProvider() : array
        {
        }
        /**
         * @dataProvider equalProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false) : void
        {
        }
        /**
         * @dataProvider notEqualProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false) : void
        {
        }
        /**
         * @dataProvider notEqualProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertNotEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false) : void
        {
        }
        /**
         * @dataProvider equalProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertNotEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false) : void
        {
        }
        /**
         * @dataProvider sameProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertSameSucceeds($a, $b) : void
        {
        }
        /**
         * @dataProvider notSameProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertSameFails($a, $b) : void
        {
        }
        /**
         * @dataProvider notSameProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertNotSameSucceeds($a, $b) : void
        {
        }
        /**
         * @dataProvider sameProvider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertNotSameFails($a, $b) : void
        {
        }
        public function testAssertXmlFileEqualsXmlFile() : void
        {
        }
        public function testAssertXmlFileNotEqualsXmlFile() : void
        {
        }
        public function testAssertXmlStringEqualsXmlFile() : void
        {
        }
        public function testXmlStringNotEqualsXmlFile() : void
        {
        }
        public function testAssertXmlStringEqualsXmlString() : void
        {
        }
        /**
         * @ticket 1860
         */
        public function testAssertXmlStringEqualsXmlString2() : void
        {
        }
        /**
         * @ticket 1860
         */
        public function testAssertXmlStringEqualsXmlString3() : void
        {
        }
        public function testAssertXmlStringNotEqualsXmlString() : void
        {
        }
        public function testXMLStructureIsSame() : void
        {
        }
        public function testXMLStructureWrongNumberOfAttributes() : void
        {
        }
        public function testXMLStructureWrongNumberOfNodes() : void
        {
        }
        public function testXMLStructureIsSameButDataIsNot() : void
        {
        }
        public function testXMLStructureAttributesAreSameButValuesAreNot() : void
        {
        }
        public function testXMLStructureIgnoreTextNodes() : void
        {
        }
        public function testAssertStringEqualsNumeric() : void
        {
        }
        public function testAssertStringEqualsNumeric2() : void
        {
        }
        public function testAssertIsReadable() : void
        {
        }
        public function testAssertNotIsReadable() : void
        {
        }
        public function testAssertIsWritable() : void
        {
        }
        public function testAssertNotIsWritable() : void
        {
        }
        public function testAssertDirectoryExists() : void
        {
        }
        public function testAssertDirectoryNotExists() : void
        {
        }
        public function testAssertDirectoryIsReadable() : void
        {
        }
        public function testAssertDirectoryIsWritable() : void
        {
        }
        public function testAssertFileExists() : void
        {
        }
        public function testAssertFileNotExists() : void
        {
        }
        public function testAssertFileIsReadable() : void
        {
        }
        public function testAssertFileIsWritable() : void
        {
        }
        public function testAssertObjectHasAttribute() : void
        {
        }
        public function testAssertObjectHasAttributeNumericAttribute() : void
        {
        }
        public function testAssertObjectHasAttributeMultiByteAttribute() : void
        {
        }
        public function testAssertObjectNotHasAttribute() : void
        {
        }
        public function testAssertObjectNotHasAttributeNumericAttribute() : void
        {
        }
        public function testAssertObjectNotHasAttributeMultiByteAttribute() : void
        {
        }
        public function testAssertFinite() : void
        {
        }
        public function testAssertInfinite() : void
        {
        }
        public function testAssertNan() : void
        {
        }
        public function testAssertNull() : void
        {
        }
        public function testAssertNotNull() : void
        {
        }
        public function testAssertTrue() : void
        {
        }
        public function testAssertNotTrue() : void
        {
        }
        public function testAssertFalse() : void
        {
        }
        public function testAssertNotFalse() : void
        {
        }
        public function testAssertRegExp() : void
        {
        }
        public function testAssertNotRegExp() : void
        {
        }
        public function testAssertSame() : void
        {
        }
        public function testAssertSame2() : void
        {
        }
        public function testAssertNotSame() : void
        {
        }
        public function testAssertNotSame2() : void
        {
        }
        public function testAssertNotSameFailsNull() : void
        {
        }
        public function testGreaterThan() : void
        {
        }
        public function testAttributeGreaterThan() : void
        {
        }
        public function testGreaterThanOrEqual() : void
        {
        }
        public function testAttributeGreaterThanOrEqual() : void
        {
        }
        public function testLessThan() : void
        {
        }
        public function testAttributeLessThan() : void
        {
        }
        public function testLessThanOrEqual() : void
        {
        }
        public function testAttributeLessThanOrEqual() : void
        {
        }
        public function testReadAttribute() : void
        {
        }
        public function testReadAttribute2() : void
        {
        }
        public function testReadAttribute4() : void
        {
        }
        public function testReadAttribute5() : void
        {
        }
        public function testReadAttributeIfAttributeNameIsNotValid() : void
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument2() : void
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument2() : void
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument3() : void
        {
        }
        public function testGetObjectAttributeRaisesExceptionForInvalidFirstArgument() : void
        {
        }
        public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument2() : void
        {
        }
        public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument3() : void
        {
        }
        public function testGetObjectAttributeWorksForInheritedAttributes() : void
        {
        }
        public function testAssertPublicAttributeContains() : void
        {
        }
        public function testAssertPublicAttributeContainsOnly() : void
        {
        }
        public function testAssertPublicAttributeNotContains() : void
        {
        }
        public function testAssertPublicAttributeNotContainsOnly() : void
        {
        }
        public function testAssertProtectedAttributeContains() : void
        {
        }
        public function testAssertProtectedAttributeNotContains() : void
        {
        }
        public function testAssertPrivateAttributeContains() : void
        {
        }
        public function testAssertPrivateAttributeNotContains() : void
        {
        }
        public function testAssertAttributeContainsNonObject() : void
        {
        }
        public function testAssertAttributeNotContainsNonObject() : void
        {
        }
        public function testAssertPublicAttributeEquals() : void
        {
        }
        public function testAssertPublicAttributeNotEquals() : void
        {
        }
        public function testAssertPublicAttributeSame() : void
        {
        }
        public function testAssertPublicAttributeNotSame() : void
        {
        }
        public function testAssertProtectedAttributeEquals() : void
        {
        }
        public function testAssertProtectedAttributeNotEquals() : void
        {
        }
        public function testAssertPrivateAttributeEquals() : void
        {
        }
        public function testAssertPrivateAttributeNotEquals() : void
        {
        }
        public function testAssertPublicStaticAttributeEquals() : void
        {
        }
        public function testAssertPublicStaticAttributeNotEquals() : void
        {
        }
        public function testAssertProtectedStaticAttributeEquals() : void
        {
        }
        public function testAssertProtectedStaticAttributeNotEquals() : void
        {
        }
        public function testAssertPrivateStaticAttributeEquals() : void
        {
        }
        public function testAssertPrivateStaticAttributeNotEquals() : void
        {
        }
        public function testAssertClassHasAttributeThrowsExceptionIfAttributeNameIsNotValid() : void
        {
        }
        public function testAssertClassHasAttributeThrowsExceptionIfClassDoesNotExist() : void
        {
        }
        public function testAssertClassNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid() : void
        {
        }
        public function testAssertClassNotHasAttributeThrowsExceptionIfClassDoesNotExist() : void
        {
        }
        public function testAssertClassHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid() : void
        {
        }
        public function testAssertClassHasStaticAttributeThrowsExceptionIfClassDoesNotExist() : void
        {
        }
        public function testAssertClassNotHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid() : void
        {
        }
        public function testAssertClassNotHasStaticAttributeThrowsExceptionIfClassDoesNotExist() : void
        {
        }
        public function testAssertObjectHasAttributeThrowsException2() : void
        {
        }
        public function testAssertObjectHasAttributeThrowsExceptionIfAttributeNameIsNotValid() : void
        {
        }
        public function testAssertObjectNotHasAttributeThrowsException2() : void
        {
        }
        public function testAssertObjectNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid() : void
        {
        }
        public function testClassHasPublicAttribute() : void
        {
        }
        public function testClassNotHasPublicAttribute() : void
        {
        }
        public function testClassHasPublicStaticAttribute() : void
        {
        }
        public function testClassNotHasPublicStaticAttribute() : void
        {
        }
        public function testObjectHasPublicAttribute() : void
        {
        }
        public function testObjectNotHasPublicAttribute() : void
        {
        }
        public function testObjectHasOnTheFlyAttribute() : void
        {
        }
        public function testObjectNotHasOnTheFlyAttribute() : void
        {
        }
        public function testObjectHasProtectedAttribute() : void
        {
        }
        public function testObjectNotHasProtectedAttribute() : void
        {
        }
        public function testObjectHasPrivateAttribute() : void
        {
        }
        public function testObjectNotHasPrivateAttribute() : void
        {
        }
        public function testAssertThatAttributeEquals() : void
        {
        }
        public function testAssertThatAttributeEquals2() : void
        {
        }
        public function testAssertThatAttributeEqualTo() : void
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnything() : void
        {
        }
        public function testAssertThatIsTrue() : void
        {
        }
        public function testAssertThatIsFalse() : void
        {
        }
        public function testAssertThatIsJson() : void
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnythingAndAnything() : void
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnythingOrAnything() : void
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnythingXorNotAnything() : void
        {
        }
        public function testAssertThatContains() : void
        {
        }
        public function testAssertThatStringContains() : void
        {
        }
        public function testAssertThatContainsOnly() : void
        {
        }
        public function testAssertThatContainsOnlyInstancesOf() : void
        {
        }
        public function testAssertThatArrayHasKey() : void
        {
        }
        public function testAssertThatClassHasAttribute() : void
        {
        }
        public function testAssertThatClassHasStaticAttribute() : void
        {
        }
        public function testAssertThatObjectHasAttribute() : void
        {
        }
        public function testAssertThatEqualTo() : void
        {
        }
        public function testAssertThatIdenticalTo() : void
        {
        }
        public function testAssertThatIsInstanceOf() : void
        {
        }
        public function testAssertThatIsType() : void
        {
        }
        public function testAssertThatIsEmpty() : void
        {
        }
        public function testAssertThatFileExists() : void
        {
        }
        public function testAssertThatGreaterThan() : void
        {
        }
        public function testAssertThatGreaterThanOrEqual() : void
        {
        }
        public function testAssertThatLessThan() : void
        {
        }
        public function testAssertThatLessThanOrEqual() : void
        {
        }
        public function testAssertThatMatchesRegularExpression() : void
        {
        }
        public function testAssertThatCallback() : void
        {
        }
        public function testAssertThatCountOf() : void
        {
        }
        public function testAssertFileEquals() : void
        {
        }
        public function testAssertFileNotEquals() : void
        {
        }
        public function testAssertStringEqualsFile() : void
        {
        }
        public function testAssertStringNotEqualsFile() : void
        {
        }
        public function testAssertStringStartsNotWithThrowsException2() : void
        {
        }
        public function testAssertStringStartsWith() : void
        {
        }
        public function testAssertStringStartsNotWith() : void
        {
        }
        public function testAssertStringEndsWith() : void
        {
        }
        public function testAssertStringEndsNotWith() : void
        {
        }
        public function testAssertStringMatchesFormat() : void
        {
        }
        public function testAssertStringMatchesFormatFailure() : void
        {
        }
        public function testAssertStringNotMatchesFormat() : void
        {
        }
        public function testAssertEmpty() : void
        {
        }
        public function testAssertNotEmpty() : void
        {
        }
        public function testAssertAttributeEmpty() : void
        {
        }
        public function testAssertAttributeNotEmpty() : void
        {
        }
        public function testMarkTestIncomplete() : void
        {
        }
        public function testMarkTestSkipped() : void
        {
        }
        public function testAssertCount() : void
        {
        }
        public function testAssertCountTraversable() : void
        {
        }
        public function testAssertCountThrowsExceptionIfElementIsNotCountable() : void
        {
        }
        public function testAssertAttributeCount() : void
        {
        }
        public function testAssertNotCount() : void
        {
        }
        public function testAssertNotCountThrowsExceptionIfElementIsNotCountable() : void
        {
        }
        public function testAssertAttributeNotCount() : void
        {
        }
        public function testAssertSameSize() : void
        {
        }
        public function testAssertSameSizeThrowsExceptionIfExpectedIsNotCountable() : void
        {
        }
        public function testAssertSameSizeThrowsExceptionIfActualIsNotCountable() : void
        {
        }
        public function testAssertNotSameSize() : void
        {
        }
        public function testAssertNotSameSizeThrowsExceptionIfExpectedIsNotCountable() : void
        {
        }
        public function testAssertNotSameSizeThrowsExceptionIfActualIsNotCountable() : void
        {
        }
        public function testAssertJson() : void
        {
        }
        public function testAssertJsonStringEqualsJsonString() : void
        {
        }
        /**
         * @dataProvider validInvalidJsonDataprovider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertJsonStringEqualsJsonStringErrorRaised($expected, $actual) : void
        {
        }
        public function testAssertJsonStringNotEqualsJsonString() : void
        {
        }
        /**
         * @dataProvider validInvalidJsonDataprovider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testAssertJsonStringNotEqualsJsonStringErrorRaised($expected, $actual) : void
        {
        }
        public function testAssertJsonStringEqualsJsonFile() : void
        {
        }
        public function testAssertJsonStringEqualsJsonFileExpectingExpectationFailedException() : void
        {
        }
        public function testAssertJsonStringNotEqualsJsonFile() : void
        {
        }
        public function testAssertJsonFileNotEqualsJsonFile() : void
        {
        }
        public function testAssertJsonFileEqualsJsonFile() : void
        {
        }
        public function testAssertInstanceOfThrowsExceptionIfTypeDoesNotExist() : void
        {
        }
        public function testAssertInstanceOf() : void
        {
        }
        public function testAssertAttributeInstanceOf() : void
        {
        }
        public function testAssertNotInstanceOfThrowsExceptionIfTypeDoesNotExist() : void
        {
        }
        public function testAssertNotInstanceOf() : void
        {
        }
        public function testAssertAttributeNotInstanceOf() : void
        {
        }
        public function testAssertInternalType() : void
        {
        }
        public function testAssertInternalTypeDouble() : void
        {
        }
        public function testAssertAttributeInternalType() : void
        {
        }
        public function testAssertNotInternalType() : void
        {
        }
        public function testAssertAttributeNotInternalType() : void
        {
        }
        public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument() : void
        {
        }
        public function testAssertStringMatchesFormatFile() : void
        {
        }
        public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument() : void
        {
        }
        public function testAssertStringNotMatchesFormatFile() : void
        {
        }
        public function testStringsCanBeComparedForEqualityIgnoringCase() : void
        {
        }
        public function testArraysOfStringsCanBeComparedForEqualityIgnoringCase() : void
        {
        }
        public function testStringsCanBeComparedForEqualityWithDelta() : void
        {
        }
        public function testArraysOfStringsCanBeComparedForEqualityWithDelta() : void
        {
        }
        public function testArraysCanBeComparedForEqualityWithCanonicalization() : void
        {
        }
        public function testArrayTypeCanBeAsserted() : void
        {
        }
        public function testBoolTypeCanBeAsserted() : void
        {
        }
        public function testFloatTypeCanBeAsserted() : void
        {
        }
        public function testIntTypeCanBeAsserted() : void
        {
        }
        public function testNumericTypeCanBeAsserted() : void
        {
        }
        public function testObjectTypeCanBeAsserted() : void
        {
        }
        public function testResourceTypeCanBeAsserted() : void
        {
        }
        public function testStringTypeCanBeAsserted() : void
        {
        }
        public function testScalarTypeCanBeAsserted() : void
        {
        }
        public function testCallableTypeCanBeAsserted() : void
        {
        }
        public function testIterableTypeCanBeAsserted() : void
        {
        }
        public function testNotArrayTypeCanBeAsserted() : void
        {
        }
        public function testNotBoolTypeCanBeAsserted() : void
        {
        }
        public function testNotFloatTypeCanBeAsserted() : void
        {
        }
        public function testNotIntTypeCanBeAsserted() : void
        {
        }
        public function testNotNumericTypeCanBeAsserted() : void
        {
        }
        public function testNotObjectTypeCanBeAsserted() : void
        {
        }
        public function testNotResourceTypeCanBeAsserted() : void
        {
        }
        public function testNotScalarTypeCanBeAsserted() : void
        {
        }
        public function testNotStringTypeCanBeAsserted() : void
        {
        }
        public function testNotCallableTypeCanBeAsserted() : void
        {
        }
        public function testNotIterableTypeCanBeAsserted() : void
        {
        }
        public function testLogicalAnd() : void
        {
        }
        public function testLogicalOr() : void
        {
        }
        public function testLogicalXor() : void
        {
        }
        public function testStringContainsStringCanBeAsserted() : void
        {
        }
        public function testStringNotContainsStringCanBeAsserted() : void
        {
        }
        public function testStringContainsStringCanBeAssertedIgnoringCase() : void
        {
        }
        public function testStringNotContainsStringCanBeAssertedIgnoringCase() : void
        {
        }
        public function testIterableContainsSameObjectCanBeAsserted() : void
        {
        }
        public function testIterableNotContainsSameObjectCanBeAsserted() : void
        {
        }
        protected function sameValues() : array
        {
        }
        protected function notEqualValues() : array
        {
        }
        protected function equalValues() : array
        {
        }
    }
    /**
     * @small
     */
    final class TestSuiteIteratorTest extends \PHPUnit\Framework\TestCase
    {
        /*
         * tests for the initial state with empty test suite
         */
        public function testKeyForEmptyTestSuiteInitiallyReturnsZero() : void
        {
        }
        public function testValidForEmptyTestSuiteInitiallyReturnsFalse() : void
        {
        }
        public function testCurrentForEmptyTestSuiteInitiallyReturnsNull() : void
        {
        }
        /*
         * tests for the initial state with non-empty test suite
         */
        public function testKeyForNonEmptyTestSuiteInitiallyReturnsZero() : void
        {
        }
        public function testValidForNonEmptyTestSuiteInitiallyReturnsTrue() : void
        {
        }
        public function testCurrentForNonEmptyTestSuiteInitiallyReturnsFirstTest() : void
        {
        }
        /*
         * tests for rewind
         */
        public function testRewindResetsKeyToZero() : void
        {
        }
        public function testRewindResetsCurrentToFirstElement() : void
        {
        }
        /*
         * tests for next
         */
        public function testNextIncreasesKeyFromZeroToOne() : void
        {
        }
        public function testCurrentAfterLastElementReturnsNull() : void
        {
        }
        public function testValidAfterLastElementReturnsFalse() : void
        {
        }
        /*
         * tests for getChildren
         */
        public function testGetChildrenForEmptyTestSuiteThrowsException() : void
        {
        }
        public function testGetChildrenForCurrentTestThrowsException() : void
        {
        }
        public function testGetChildrenReturnsNewInstanceWithCurrentTestSuite() : void
        {
        }
        /*
         * tests for hasChildren
         */
        public function testHasChildrenForCurrentTestSuiteReturnsTrue() : void
        {
        }
        public function testHasChildrenForCurrentTestReturnsFalse() : void
        {
        }
        public function testHasChildrenForNoTestsReturnsFalse() : void
        {
        }
    }
    final class TestListenerTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var TestResult
         */
        private $result;
        /**
         * @var MyTestListener
         */
        private $listener;
        protected function setUp() : void
        {
        }
        public function testError() : void
        {
        }
        public function testFailure() : void
        {
        }
        public function testStartStop() : void
        {
        }
    }
    class TestImplementorTest extends \PHPUnit\Framework\TestCase
    {
        public function testSuccessfulRun() : void
        {
        }
    }
    class TestSuiteTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var TestResult
         */
        private $result;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        /**
         * @testdox TestSuite can be created with name of existing non-TestCase class
         */
        public function testSuiteNameCanBeSameAsExistingNonTestClassName() : void
        {
        }
        public function testAddTestSuite() : void
        {
        }
        public function testInheritedTests() : void
        {
        }
        public function testNoTestCases() : void
        {
        }
        public function testNotPublicTestCase() : void
        {
        }
        public function testNotVoidTestCase() : void
        {
        }
        public function testOneTestCase() : void
        {
        }
        public function testShadowedTests() : void
        {
        }
        public function testBeforeClassAndAfterClassAnnotations() : void
        {
        }
        public function testBeforeClassWithDataProviders() : void
        {
        }
        public function testBeforeAnnotation() : void
        {
        }
        public function testTestWithAnnotation() : void
        {
        }
        public function testSkippedTestDataProvider() : void
        {
        }
        public function testTestDataProviderDependency() : void
        {
        }
        public function testIncompleteTestDataProvider() : void
        {
        }
        public function testRequirementsBeforeClassHook() : void
        {
        }
        public function testDoNotSkipInheritedClass() : void
        {
        }
        public function testCreateTestForConstructorlessTestClass() : void
        {
        }
        /**
         * @testdox Handles exceptions in tearDownAfterClass()
         */
        public function testTearDownAfterClassInTestSuite() : void
        {
        }
    }
    class TestResultTest extends \PHPUnit\Framework\TestCase
    {
        public function testRemoveListenerRemovesOnlyExpectedListener() : void
        {
        }
        public function testAddErrorOfTypeIncompleteTest() : void
        {
        }
        public function canSkipCoverageProvider() : array
        {
        }
        /**
         * @dataProvider canSkipCoverageProvider
         */
        public function testCanSkipCoverage($testCase, $expectedCanSkip) : void
        {
        }
    }
    class ExceptionWrapperTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @runInSeparateProcess
         */
        public function testGetOriginalException() : void
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testGetOriginalExceptionWithPrevious() : void
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testNoOriginalExceptionInStacktrace() : void
        {
        }
    }
}
namespace {
    class StaticInvocationTest extends \PHPUnit\Framework\TestCase
    {
        public function testConstructorRequiresClassAndMethodAndParameters() : void
        {
        }
        public function testAllowToGetClassNameSetInConstructor() : void
        {
        }
        public function testAllowToGetMethodNameSetInConstructor() : void
        {
        }
        public function testAllowToGetMethodParametersSetInConstructor() : void
        {
        }
        public function testConstructorAllowToSetFlagCloneObjectsInParameters() : void
        {
        }
        public function testAllowToGetReturnTypeSetInConstructor() : void
        {
        }
        public function testToStringWillReturnEmptyString() : void
        {
        }
    }
    class ObjectInvocationTest extends \PHPUnit\Framework\TestCase
    {
        public function testConstructorRequiresClassAndMethodAndParametersAndObject() : void
        {
        }
        public function testAllowToGetClassNameSetInConstructor() : void
        {
        }
        public function testAllowToGetMethodNameSetInConstructor() : void
        {
        }
        public function testAllowToGetObjectSetInConstructor() : void
        {
        }
        public function testAllowToGetMethodParametersSetInConstructor() : void
        {
        }
        public function testConstructorAllowToSetFlagCloneObjectsInParameters() : void
        {
        }
        public function testAllowToGetReturnTypeSetInConstructor() : void
        {
        }
    }
    final class ProxyObjectTest extends \PHPUnit\Framework\TestCase
    {
        public function testProxyingWorksForMethodThatReturnsUndeclaredScalarValue() : void
        {
        }
        public function testProxyingWorksForMethodThatReturnsDeclaredScalarValue() : void
        {
        }
        public function testProxyingWorksForMethodThatReturnsUndeclaredObject() : void
        {
        }
        public function testProxyingWorksForMethodThatReturnsDeclaredObject() : void
        {
        }
        public function testProxyingWorksForMethodThatReturnsUndeclaredObjectOfFinalClass() : void
        {
        }
        public function testProxyingWorksForMethodThatReturnsDeclaredObjectOfFinalClass() : void
        {
        }
    }
}
namespace PHPUnit\Framework\MockObject {
    class MockMethodTest extends \PHPUnit\Framework\TestCase
    {
        public function testGetNameReturnsMethodName()
        {
        }
        public function testFailWhenReturnTypeIsParentButThereIsNoParentClass()
        {
        }
    }
}
namespace {
    class ConsecutiveParametersTest extends \PHPUnit\Framework\TestCase
    {
        public function testIntegration() : void
        {
        }
        public function testIntegrationWithLessAssertionsThanMethodCalls() : void
        {
        }
        public function testIntegrationExpectingException() : void
        {
        }
        public function testIntegrationFailsWithNonIterableParameterGroup() : void
        {
        }
    }
    /**
     * @covers \PHPUnit\Framework\MockObject\Generator
     *
     * @uses \PHPUnit\Framework\MockObject\InvocationMocker
     * @uses \PHPUnit\Framework\MockObject\Builder\InvocationMocker
     * @uses \PHPUnit\Framework\MockObject\Invocation\ObjectInvocation
     * @uses \PHPUnit\Framework\MockObject\Invocation\StaticInvocation
     * @uses \PHPUnit\Framework\MockObject\Matcher
     * @uses \PHPUnit\Framework\MockObject\Matcher\InvokedRecorder
     * @uses \PHPUnit\Framework\MockObject\Matcher\MethodName
     * @uses \PHPUnit\Framework\MockObject\Stub\ReturnStub
     * @uses \PHPUnit\Framework\MockObject\Matcher\InvokedCount
     */
    class GeneratorTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var Generator
         */
        private $generator;
        protected function setUp() : void
        {
        }
        public function testGetMockFailsWhenInvalidFunctionNameIsPassedInAsAFunctionToMock() : void
        {
        }
        public function testGetMockCanCreateNonExistingFunctions() : void
        {
        }
        public function testGetMockGeneratorFails() : void
        {
        }
        public function testGetMockBlacklistedMethodNamesPhp7() : void
        {
        }
        public function testGetMockForAbstractClassDoesNotFailWhenFakingInterfaces() : void
        {
        }
        public function testGetMockForAbstractClassStubbingAbstractClass() : void
        {
        }
        public function testGetMockForAbstractClassWithNonExistentMethods() : void
        {
        }
        public function testGetMockForAbstractClassShouldCreateStubsOnlyForAbstractMethodWhenNoMethodsWereInformed() : void
        {
        }
        /**
         * @dataProvider getMockForAbstractClassExpectsInvalidArgumentExceptionDataprovider
         */
        public function testGetMockForAbstractClassExpectingInvalidArgumentException($className, $mockClassName) : void
        {
        }
        public function testGetMockForAbstractClassAbstractClassDoesNotExist() : void
        {
        }
        public function getMockForAbstractClassExpectsInvalidArgumentExceptionDataprovider() : array
        {
        }
        public function testGetMockForTraitWithNonExistentMethodsAndNonAbstractMethods() : void
        {
        }
        public function testGetMockForTraitStubbingAbstractMethod() : void
        {
        }
        public function testGetMockForSingletonWithReflectionSuccess() : void
        {
        }
        public function testExceptionIsRaisedForMutuallyExclusiveOptions() : void
        {
        }
        public function testCanImplementInterfacesThatHaveMethodsWithReturnTypes() : void
        {
        }
        public function testCanConfigureMethodsForDoubleOfNonExistentClass() : void
        {
        }
        public function testCanInvokeMethodsOfNonExistentClass() : void
        {
        }
        public function testMockingOfExceptionWithThrowable() : void
        {
        }
        public function testMockingOfThrowable() : void
        {
        }
        public function testMockingOfThrowableConstructorArguments() : void
        {
        }
        public function testVariadicArgumentsArePassedToOriginalMethod()
        {
        }
        public function testVariadicArgumentsArePassedToMockedMethod()
        {
        }
    }
    class InvocationMockerTest extends \PHPUnit\Framework\TestCase
    {
        public function testWillReturnWithOneValue() : void
        {
        }
        public function testWillReturnWithMultipleValues() : void
        {
        }
        public function testWillReturnOnConsecutiveCalls() : void
        {
        }
        public function testWillReturnByReference() : void
        {
        }
        public function testWillFailWhenTryingToPerformExpectationUnconfigurableMethod() : void
        {
        }
    }
    class MockBuilderTest extends \PHPUnit\Framework\TestCase
    {
        public function testMockBuilderRequiresClassName() : void
        {
        }
        public function testByDefaultMocksAllMethods() : void
        {
        }
        public function testMethodsToMockCanBeSpecified() : void
        {
        }
        public function testMethodExceptionsToMockCanBeSpecified() : void
        {
        }
        public function testEmptyMethodExceptionsToMockCanBeSpecified() : void
        {
        }
        public function testByDefaultDoesNotPassArgumentsToTheConstructor() : void
        {
        }
        public function testMockClassNameCanBeSpecified() : void
        {
        }
        public function testConstructorArgumentsCanBeSpecified() : void
        {
        }
        public function testOriginalConstructorCanBeDisabled() : void
        {
        }
        public function testByDefaultOriginalCloneIsPreserved() : void
        {
        }
        public function testOriginalCloneCanBeDisabled() : void
        {
        }
        public function testProvidesAFluentInterface() : void
        {
        }
    }
    class MockObjectTest extends \PHPUnit\Framework\TestCase
    {
        public function testMockedMethodIsNeverCalled() : void
        {
        }
        public function testMockedMethodIsNeverCalledWithParameter() : void
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testMockedMethodIsNotCalledWhenExpectsAnyWithParameter() : void
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testMockedMethodIsNotCalledWhenMethodSpecifiedDirectlyWithParameter() : void
        {
        }
        public function testMockedMethodIsCalledAtLeastOnce() : void
        {
        }
        public function testMockedMethodIsCalledAtLeastOnce2() : void
        {
        }
        public function testMockedMethodIsCalledAtLeastTwice() : void
        {
        }
        public function testMockedMethodIsCalledAtLeastTwice2() : void
        {
        }
        public function testMockedMethodIsCalledAtMostTwice() : void
        {
        }
        public function testMockedMethodIsCalledAtMosttTwice2() : void
        {
        }
        public function testMockedMethodIsCalledOnce() : void
        {
        }
        public function testMockedMethodIsCalledOnceWithParameter() : void
        {
        }
        public function testMockedMethodIsCalledExactly() : void
        {
        }
        public function testStubbedException() : void
        {
        }
        public function testStubbedWillThrowException() : void
        {
        }
        public function testStubbedReturnValue() : void
        {
        }
        public function testStubbedReturnValueMap() : void
        {
        }
        public function testStubbedReturnArgument() : void
        {
        }
        public function testFunctionCallback() : void
        {
        }
        public function testStubbedReturnSelf() : void
        {
        }
        public function testStubbedReturnOnConsecutiveCalls() : void
        {
        }
        public function testStaticMethodCallback() : void
        {
        }
        public function testPublicMethodCallback() : void
        {
        }
        public function testMockClassOnlyGeneratedOnce() : void
        {
        }
        public function testMockClassDifferentForPartialMocks() : void
        {
        }
        public function testMockClassStoreOverrulable() : void
        {
        }
        public function testGetMockWithFixedClassNameCanProduceTheSameMockTwice() : void
        {
        }
        public function testOriginalConstructorSettingConsidered() : void
        {
        }
        public function testOriginalCloneSettingConsidered() : void
        {
        }
        public function testGetMockForAbstractClass() : void
        {
        }
        /**
         * @dataProvider traversableProvider
         */
        public function testGetMockForTraversable($type) : void
        {
        }
        public function testMultipleInterfacesCanBeMockedInSingleObject() : void
        {
        }
        public function testGetMockForTrait() : void
        {
        }
        public function testClonedMockObjectShouldStillEqualTheOriginal() : void
        {
        }
        public function testMockObjectsConstructedIndepentantlyShouldBeEqual() : void
        {
        }
        public function testMockObjectsConstructedIndepentantlyShouldNotBeTheSame() : void
        {
        }
        public function testClonedMockObjectCanBeUsedInPlaceOfOriginalOne() : void
        {
        }
        public function testClonedMockObjectIsNotIdenticalToOriginalOne() : void
        {
        }
        public function testObjectMethodCallWithArgumentCloningEnabled() : void
        {
        }
        public function testObjectMethodCallWithArgumentCloningDisabled() : void
        {
        }
        public function testArgumentCloningOptionGeneratesUniqueMock() : void
        {
        }
        public function testVerificationOfMethodNameFailsWithoutParameters() : void
        {
        }
        public function testVerificationOfMethodNameFailsWithParameters() : void
        {
        }
        public function testVerificationOfMethodNameFailsWithWrongParameters() : void
        {
        }
        public function testVerificationOfNeverFailsWithEmptyParameters() : void
        {
        }
        public function testVerificationOfNeverFailsWithAnyParameters() : void
        {
        }
        public function testWithAnythingInsteadOfWithAnyParameters() : void
        {
        }
        /**
         * See https://github.com/sebastianbergmann/phpunit-mock-objects/issues/81
         */
        public function testMockArgumentsPassedByReference() : void
        {
        }
        /**
         * See https://github.com/sebastianbergmann/phpunit-mock-objects/issues/81
         */
        public function testMockArgumentsPassedByReference2() : void
        {
        }
        /**
         * @see https://github.com/sebastianbergmann/phpunit-mock-objects/issues/116
         */
        public function testMockArgumentsPassedByReference3() : void
        {
        }
        /**
         * @see https://github.com/sebastianbergmann/phpunit/issues/796
         */
        public function testMockArgumentsPassedByReference4() : void
        {
        }
        /**
         * @requires extension soap
         */
        public function testCreateMockFromWsdl() : void
        {
        }
        /**
         * @requires extension soap
         */
        public function testCreateNamespacedMockFromWsdl() : void
        {
        }
        /**
         * @requires extension soap
         */
        public function testCreateTwoMocksOfOneWsdlFile() : void
        {
        }
        /**
         * @see      https://github.com/sebastianbergmann/phpunit/issues/2573
         * @ticket   2573
         * @requires extension soap
         */
        public function testCreateMockOfWsdlFileWithSpecialChars() : void
        {
        }
        /**
         * @see    https://github.com/sebastianbergmann/phpunit-mock-objects/issues/156
         * @ticket 156
         */
        public function testInterfaceWithStaticMethodCanBeStubbed() : void
        {
        }
        public function testInvokingStubbedStaticMethodRaisesException() : void
        {
        }
        /**
         * @see    https://github.com/sebastianbergmann/phpunit-mock-objects/issues/171
         * @ticket 171
         */
        public function testStubForClassThatImplementsSerializableCanBeCreatedWithoutInvokingTheConstructor() : void
        {
        }
        public function testGetMockForClassWithSelfTypeHint() : void
        {
        }
        public function testStringableClassDoesNotThrow() : void
        {
        }
        public function testStringableClassCanBeMocked() : void
        {
        }
        public function traversableProvider() : array
        {
        }
        public function testParameterCallbackConstraintOnlyEvaluatedOnce() : void
        {
        }
        public function testReturnTypesAreMockedCorrectly() : void
        {
        }
        public function testDisableAutomaticReturnValueGeneration() : void
        {
        }
        public function testDisableAutomaticReturnValueGenerationWithToString() : void
        {
        }
        public function testVoidReturnTypeIsMockedCorrectly() : void
        {
        }
        /**
         * @requires PHP 7.2
         */
        public function testObjectReturnTypeIsMockedCorrectly() : void
        {
        }
        public function testTraitCanBeDoubled() : void
        {
        }
        public function testTraitWithConstructorCanBeDoubled() : void
        {
        }
        private function resetMockObjects() : void
        {
        }
    }
}
namespace PHPUnit\Framework {
    class TestFailureTest extends \PHPUnit\Framework\TestCase
    {
        public function testToString() : void
        {
        }
        public function testToStringForError() : void
        {
        }
        public function testToStringForNonSelfDescribing() : void
        {
        }
        public function testgetExceptionAsString() : void
        {
        }
        public function testExceptionToString() : void
        {
        }
        public function testExceptionToStringForExpectationFailedException() : void
        {
        }
        public function testExceptionToStringForExpectationFailedExceptionWithComparisonFailure() : void
        {
        }
        public function testExceptionToStringForFrameworkError() : void
        {
        }
        public function testExceptionToStringForExceptionWrapper() : void
        {
        }
        public function testGetTestName() : void
        {
        }
        public function testFailedTest() : void
        {
        }
        public function testThrownException() : void
        {
        }
        public function testExceptionMessage() : void
        {
        }
        public function testIsFailure() : void
        {
        }
        public function testIsFailureFalse() : void
        {
        }
    }
    class ConstraintTest extends \PHPUnit\Framework\TestCase
    {
        public function testConstraintArrayNotHasKey() : void
        {
        }
        public function testConstraintArrayNotHasKey2() : void
        {
        }
        public function testConstraintFileNotExists() : void
        {
        }
        public function testConstraintFileNotExists2() : void
        {
        }
        public function testConstraintNotGreaterThan() : void
        {
        }
        public function testConstraintNotGreaterThan2() : void
        {
        }
        public function testConstraintGreaterThanOrEqual() : void
        {
        }
        public function testConstraintGreaterThanOrEqual2() : void
        {
        }
        public function testConstraintNotGreaterThanOrEqual() : void
        {
        }
        public function testConstraintNotGreaterThanOrEqual2() : void
        {
        }
        public function testConstraintIsAnything() : void
        {
        }
        public function testConstraintNotIsAnything() : void
        {
        }
        public function testConstraintIsNotEqual() : void
        {
        }
        public function testConstraintIsNotEqual2() : void
        {
        }
        public function testConstraintIsNotIdentical() : void
        {
        }
        public function testConstraintIsNotIdentical2() : void
        {
        }
        public function testConstraintIsNotIdentical3() : void
        {
        }
        public function testConstraintIsInstanceOf() : void
        {
        }
        public function testConstraintIsInstanceOf2() : void
        {
        }
        public function testConstraintIsNotInstanceOf() : void
        {
        }
        public function testConstraintIsNotInstanceOf2() : void
        {
        }
        public function testConstraintIsNotType() : void
        {
        }
        public function testConstraintIsNotType2() : void
        {
        }
        public function testConstraintIsNotNull() : void
        {
        }
        public function testConstraintIsNotNull2() : void
        {
        }
        public function testConstraintNotLessThan() : void
        {
        }
        public function testConstraintNotLessThan2() : void
        {
        }
        public function testConstraintLessThanOrEqual() : void
        {
        }
        public function testConstraintLessThanOrEqual2() : void
        {
        }
        public function testConstraintNotLessThanOrEqual() : void
        {
        }
        public function testConstraintNotLessThanOrEqual2() : void
        {
        }
        public function testConstraintClassNotHasAttribute() : void
        {
        }
        public function testConstraintClassNotHasAttribute2() : void
        {
        }
        public function testConstraintClassNotHasStaticAttribute() : void
        {
        }
        public function testConstraintClassNotHasStaticAttribute2() : void
        {
        }
        public function testConstraintObjectNotHasAttribute() : void
        {
        }
        public function testConstraintObjectNotHasAttribute2() : void
        {
        }
        public function testConstraintPCRENotMatch() : void
        {
        }
        public function testConstraintPCRENotMatch2() : void
        {
        }
        public function testConstraintStringStartsNotWith() : void
        {
        }
        public function testConstraintStringStartsNotWith2() : void
        {
        }
        public function testConstraintStringNotContains() : void
        {
        }
        public function testConstraintStringNotContainsWhenIgnoreCase() : void
        {
        }
        public function testConstraintStringNotContainsForUtf8StringWhenNotIgnoreCase() : void
        {
        }
        public function testConstraintStringNotContains2() : void
        {
        }
        public function testConstraintStringEndsNotWith() : void
        {
        }
        public function testConstraintStringEndsNotWith2() : void
        {
        }
        public function testConstraintArrayNotContains() : void
        {
        }
        public function testConstraintArrayNotContains2() : void
        {
        }
        public function testAttributeNotEqualTo() : void
        {
        }
        public function testAttributeNotEqualTo2() : void
        {
        }
        public function testConstraintCountWithAnArray() : void
        {
        }
        public function testConstraintCountWithAnIteratorWhichDoesNotImplementCountable() : void
        {
        }
        public function testConstraintCountWithAnObjectImplementingCountable() : void
        {
        }
        public function testConstraintCountFailing() : void
        {
        }
        public function testConstraintNotCountFailing() : void
        {
        }
        public function testConstraintNotSameSizeFailing() : void
        {
        }
        public function testConstraintException() : void
        {
        }
        /**
         * Removes spaces in front of newlines
         *
         * @param string $string
         *
         * @return string
         */
        private function trimnl($string)
        {
        }
    }
    class TestCaseTest extends \PHPUnit\Framework\TestCase
    {
        protected static $testStatic = 456;
        protected $backupGlobalsBlacklist = ['i', 'singleton'];
        public static function setUpBeforeClass() : void
        {
        }
        public static function tearDownAfterClass() : void
        {
        }
        public function testCaseToString() : void
        {
        }
        public function testSuccess() : void
        {
        }
        public function testFailure() : void
        {
        }
        public function testError() : void
        {
        }
        public function testSkipped() : void
        {
        }
        public function testIncomplete() : void
        {
        }
        public function testExceptionInSetUp() : void
        {
        }
        public function testExceptionInAssertPreConditions() : void
        {
        }
        public function testExceptionInTest() : void
        {
        }
        public function testExceptionInAssertPostConditions() : void
        {
        }
        public function testExceptionInTearDown() : void
        {
        }
        public function testExceptionInTestIsDetectedInTeardown() : void
        {
        }
        public function testNoArgTestCasePasses() : void
        {
        }
        public function testWasRun() : void
        {
        }
        public function testException() : void
        {
        }
        public function testExceptionWithEmptyMessage() : void
        {
        }
        public function testExceptionWithNullMessage() : void
        {
        }
        public function testExceptionWithMessage() : void
        {
        }
        public function testExceptionWithWrongMessage() : void
        {
        }
        public function testExceptionWithRegexpMessage() : void
        {
        }
        public function testExceptionWithWrongRegexpMessage() : void
        {
        }
        public function testExceptionWithInvalidRegexpMessage() : void
        {
        }
        public function testNoException() : void
        {
        }
        public function testWrongException() : void
        {
        }
        public function testDoesNotPerformAssertions() : void
        {
        }
        /**
         * @backupGlobals enabled
         */
        public function testGlobalsBackupPre() : void
        {
        }
        /**
         * @depends testGlobalsBackupPre
         */
        public function testGlobalsBackupPost() : void
        {
        }
        /**
         * @backupGlobals enabled
         * @backupStaticAttributes enabled
         *
         * @doesNotPerformAssertions
         */
        public function testStaticAttributesBackupPre() : void
        {
        }
        /**
         * @depends testStaticAttributesBackupPre
         */
        public function testStaticAttributesBackupPost() : void
        {
        }
        public function testIsInIsolationReturnsFalse() : void
        {
        }
        public function testIsInIsolationReturnsTrue() : void
        {
        }
        public function testExpectOutputStringFooActualFoo() : void
        {
        }
        public function testExpectOutputStringFooActualBar() : void
        {
        }
        public function testExpectOutputRegexFooActualFoo() : void
        {
        }
        public function testExpectOutputRegexFooActualBar() : void
        {
        }
        public function testSkipsIfRequiresHigherVersionOfPHPUnit() : void
        {
        }
        public function testSkipsIfRequiresHigherVersionOfPHP() : void
        {
        }
        public function testSkipsIfRequiresNonExistingOs() : void
        {
        }
        public function testSkipsIfRequiresNonExistingOsFamily() : void
        {
        }
        public function testSkipsIfRequiresNonExistingFunction() : void
        {
        }
        public function testSkipsIfRequiresNonExistingExtension() : void
        {
        }
        public function testSkipsIfRequiresExtensionWithAMinimumVersion() : void
        {
        }
        public function testSkipsProvidesMessagesForAllSkippingReasons() : void
        {
        }
        public function testRequiringAnExistingMethodDoesNotSkip() : void
        {
        }
        public function testRequiringAnExistingFunctionDoesNotSkip() : void
        {
        }
        public function testRequiringAnExistingExtensionDoesNotSkip() : void
        {
        }
        public function testRequiringAnExistingOsDoesNotSkip() : void
        {
        }
        public function testRequiringASetting() : void
        {
        }
        public function testCurrentWorkingDirectoryIsRestored() : void
        {
        }
        /**
         * @requires PHP 7
         */
        public function testTypeErrorCanBeExpected() : void
        {
        }
        public function testCreateMockFromClassName() : void
        {
        }
        public function testCreateMockMocksAllMethods() : void
        {
        }
        public function testCreatePartialMockDoesNotMockAllMethods() : void
        {
        }
        public function testCreatePartialMockCanMockNoMethods() : void
        {
        }
        public function testCreateMockSkipsConstructor() : void
        {
        }
        public function testCreateMockDisablesOriginalClone() : void
        {
        }
        public function testConfiguredMockCanBeCreated() : void
        {
        }
        public function testProvidingOfAutoreferencedArray() : void
        {
        }
        public function testProvidingArrayThatMixesObjectsAndScalars() : void
        {
        }
        public function testGettingNullTestResultObject() : void
        {
        }
        /**
         * @return array<string, array>
         */
        private function getAutoreferencedArray()
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    abstract class ConstraintTestCase extends \PHPUnit\Framework\TestCase
    {
        public final function testIsCountable() : void
        {
        }
        public final function testIsSelfDescribing() : void
        {
        }
        /**
         * Returns the class name of the constraint.
         */
        protected final function className() : string
        {
        }
    }
    class ClassHasAttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintClassHasAttribute() : void
        {
        }
        public function testConstraintClassHasAttribute2() : void
        {
        }
    }
    class IsEmptyTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsEmpty() : void
        {
        }
        public function testConstraintIsEmpty2() : void
        {
        }
        /**
         * @ticket https://github.com/sebastianbergmann/phpunit/issues/3743
         */
        public function test_EmptyIterator_is_handled_correctly() : void
        {
        }
    }
    class IsJsonTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public static function evaluateDataprovider() : array
        {
        }
        /**
         * @dataProvider evaluateDataprovider
         *
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testEvaluate($expected, $jsonOther) : void
        {
        }
    }
    class ArrayHasKeyTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintArrayHasKey() : void
        {
        }
        public function testConstraintArrayHasKey2() : void
        {
        }
    }
    class IsTypeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsType() : void
        {
        }
        public function testConstraintIsType2() : void
        {
        }
        /**
         * @dataProvider resources
         */
        public function testConstraintIsResourceTypeEvaluatesCorrectlyWithResources($resource) : void
        {
        }
        public function resources()
        {
        }
        public function testIterableTypeIsSupported() : void
        {
        }
        /**
         * Removes spaces in front of newlines
         *
         * @param string $string
         *
         * @return string
         */
        private function trimnl($string)
        {
        }
    }
    class IsIdenticalTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsIdentical() : void
        {
        }
        public function testConstraintIsIdentical2() : void
        {
        }
        public function testConstraintIsIdentical3() : void
        {
        }
        public function testConstraintIsIdenticalArrayDiff() : void
        {
        }
        public function testConstraintIsIdenticalNestedArrayDiff() : void
        {
        }
    }
    class IsReadableTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsReadable() : void
        {
        }
    }
    class ExceptionMessageTest extends \PHPUnit\Framework\TestCase
    {
        public function testLiteralMessage() : void
        {
        }
        public function testPartialMessageBegin() : void
        {
        }
        public function testPartialMessageMiddle() : void
        {
        }
        public function testPartialMessageEnd() : void
        {
        }
    }
    class CallbackTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public static function staticCallbackReturningTrue()
        {
        }
        public function callbackReturningTrue()
        {
        }
        public function testConstraintCallback() : void
        {
        }
        public function testConstraintCallbackFailure() : void
        {
        }
    }
    class IsWritableTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsWritable() : void
        {
        }
    }
    class StringMatchesFormatDescriptionTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringMatchesDirectorySeparator() : void
        {
        }
        public function testConstraintStringMatchesString() : void
        {
        }
        public function testConstraintStringMatchesOptionalString() : void
        {
        }
        public function testConstraintStringMatchesAnything() : void
        {
        }
        public function testConstraintStringMatchesOptionalAnything() : void
        {
        }
        public function testConstraintStringMatchesWhitespace() : void
        {
        }
        public function testConstraintStringMatchesInteger() : void
        {
        }
        public function testConstraintStringMatchesUnsignedInt() : void
        {
        }
        public function testConstraintStringMatchesHexadecimal() : void
        {
        }
        public function testConstraintStringMatchesFloat() : void
        {
        }
        public function testConstraintStringMatchesCharacter() : void
        {
        }
        public function testConstraintStringMatchesEscapedPercent() : void
        {
        }
        public function testConstraintStringMatchesEscapedPercentThenPlaceholder() : void
        {
        }
        public function testConstraintStringMatchesSlash() : void
        {
        }
        public function testConstraintStringMatchesBackslash() : void
        {
        }
        public function testConstraintStringMatchesBackslashSlash() : void
        {
        }
        public function testConstraintStringMatchesNewline() : void
        {
        }
        public function testFailureMessageWithNewlines() : void
        {
        }
    }
    class IsNullTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsNull() : void
        {
        }
        public function testConstraintIsNull2() : void
        {
        }
    }
    class StringStartsWithTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringStartsWithCorrectValueAndReturnResult() : void
        {
        }
        public function testConstraintStringStartsWithNotCorrectValueAndReturnResult() : void
        {
        }
        public function testConstraintStringStartsWithCorrectNumericValueAndReturnResult() : void
        {
        }
        public function testConstraintStringStartsWithCorrectSingleZeroAndReturnResult() : void
        {
        }
        public function testConstraintStringStartsWithNotCorrectNumericValueAndReturnResult() : void
        {
        }
        public function testConstraintStringStartsWithToStringMethod() : void
        {
        }
        public function testConstraintStringStartsWitCountMethod() : void
        {
        }
        public function testConstraintStringStartsWithNotCorrectValueAndExpectation() : void
        {
        }
        public function testConstraintStringStartsWithNotCorrectValueExceptionAndCustomMessage() : void
        {
        }
    }
    class StringContainsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringContains() : void
        {
        }
        public function testConstraintStringContainsWhenIgnoreCase() : void
        {
        }
        public function testConstraintStringContainsForUtf8StringWhenNotIgnoreCase() : void
        {
        }
        public function testConstraintStringContains2() : void
        {
        }
    }
    class CountTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testCount() : void
        {
        }
        public function testCountDoesNotChangeIteratorKey() : void
        {
        }
        public function testCountGeneratorsDoNotRewind() : void
        {
        }
        public function testCountTraversable() : void
        {
        }
        /**
         * @ticket https://github.com/sebastianbergmann/phpunit/issues/3743
         */
        public function test_EmptyIterator_is_handled_correctly() : void
        {
        }
    }
    class StringEndsWithTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringEndsWithCorrectValueAndReturnResult() : void
        {
        }
        public function testConstraintStringEndsWithNotCorrectValueAndReturnResult() : void
        {
        }
        public function testConstraintStringEndsWithCorrectNumericValueAndReturnResult() : void
        {
        }
        public function testConstraintStringEndsWithNotCorrectNumericValueAndReturnResult() : void
        {
        }
        public function testConstraintStringEndsWithToStringMethod() : void
        {
        }
        public function testConstraintStringEndsWithCountMethod() : void
        {
        }
        public function testConstraintStringEndsWithNotCorrectValueAndExpectation() : void
        {
        }
        public function testConstraintStringEndsWithNotCorrectValueExceptionAndCustomMessage() : void
        {
        }
    }
    class IsEqualTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsEqual() : void
        {
        }
        /**
         * @dataProvider isEqualProvider
         */
        public function testConstraintIsEqual2($expected, $actual, $message) : void
        {
        }
        public function isEqualProvider() : array
        {
        }
        /**
         * Removes spaces in front of newlines
         *
         * @param string $string
         *
         * @return string
         */
        private function trimnl($string)
        {
        }
    }
    class ArraySubsetTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public static function evaluateDataProvider() : array
        {
        }
        /**
         * @param bool               $expected
         * @param array|\Traversable $subset
         * @param array|\Traversable $other
         * @param bool               $strict
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @dataProvider evaluateDataProvider
         */
        public function testEvaluate($expected, $subset, $other, $strict) : void
        {
        }
        public function testEvaluateWithArrayAccess() : void
        {
        }
        public function testEvaluateFailMessage() : void
        {
        }
    }
    class JsonMatchesTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public static function evaluateDataprovider() : array
        {
        }
        public static function evaluateThrowsExpectationFailedExceptionWhenJsonIsValidButDoesNotMatchDataprovider() : array
        {
        }
        /**
         * @dataProvider evaluateDataprovider
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testEvaluate($expected, $jsonOther, $jsonValue) : void
        {
        }
        /**
         * @dataProvider evaluateThrowsExpectationFailedExceptionWhenJsonIsValidButDoesNotMatchDataprovider
         *
         * @throws ExpectationFailedException
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @throws \PHPUnit\Framework\Exception
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testEvaluateThrowsExpectationFailedExceptionWhenJsonIsValidButDoesNotMatch($jsonOther, $jsonValue) : void
        {
        }
        public function testToString() : void
        {
        }
    }
    class ClassHasStaticAttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintClassHasStaticAttribute() : void
        {
        }
        public function testConstraintClassHasStaticAttribute2() : void
        {
        }
    }
    class DirectoryExistsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testDefaults() : void
        {
        }
        public function testEvaluateReturnsFalseWhenDirectoryDoesNotExist() : void
        {
        }
        public function testEvaluateReturnsTrueWhenDirectoryExists() : void
        {
        }
        public function testEvaluateThrowsExpectationFailedExceptionWhenDirectoryDoesNotExist() : void
        {
        }
    }
    class ObjectHasAttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintObjectHasAttribute() : void
        {
        }
        public function testConstraintObjectHasAttribute2() : void
        {
        }
    }
    class LessThanTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintLessThan() : void
        {
        }
        public function testConstraintLessThan2() : void
        {
        }
    }
    class SameSizeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintSameSizeWithAnArray() : void
        {
        }
        public function testConstraintSameSizeWithAnIteratorWhichDoesNotImplementCountable() : void
        {
        }
        public function testConstraintSameSizeWithAnObjectImplementingCountable() : void
        {
        }
        public function testConstraintSameSizeFailing() : void
        {
        }
    }
    class AttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testAttributeEqualTo() : void
        {
        }
        public function testAttributeEqualTo2() : void
        {
        }
    }
    class FileExistsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintFileExists() : void
        {
        }
        public function testConstraintFileExists2() : void
        {
        }
    }
    final class IsInstanceOfTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintInstanceOf() : void
        {
        }
        public function testConstraintFailsOnString() : void
        {
        }
    }
    class GreaterThanTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintGreaterThan() : void
        {
        }
        public function testConstraintGreaterThan2() : void
        {
        }
    }
    class RegularExpressionTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintRegularExpression() : void
        {
        }
        public function testConstraintRegularExpression2() : void
        {
        }
    }
    final class LogicalOrTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testSetConstraintsDecoratesNonConstraintWithIsEqual() : void
        {
        }
        public function testCountReturnsCountOfComposedConstraints() : void
        {
        }
        public function testToStringReturnsImplodedStringRepresentationOfComposedConstraintsGluedWithOr() : void
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsFalseIfAllOfTheComposedConstraintsEvaluateToFalse(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsTrueIfAnyOfTheComposedConstraintsEvaluateToTrue(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionIfAllOfTheComposedConstraintsEvaluateToFalse(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionWithCustomMessageIfAllOfTheComposedConstraintsEvaluateToFalse(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsNothingIfAnyOfTheComposedConstraintsEvaluateToTrue(array $constraints) : void
        {
        }
        public function providerFailingConstraints() : \Generator
        {
        }
        public function providerSucceedingConstraints() : \Generator
        {
        }
        private function stringify(array $constraints) : string
        {
        }
    }
    class TraversableContainsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintTraversableCheckForObjectIdentityForDefaultCase() : void
        {
        }
        public function testConstraintTraversableCheckForObjectIdentityForPrimitiveType() : void
        {
        }
        public function testConstraintTraversableWithRightValue() : void
        {
        }
        public function testConstraintTraversableWithFailValue() : void
        {
        }
        public function testConstraintTraversableCountMethods() : void
        {
        }
        public function testConstraintTraversableEvaluateMethodWithFailExample() : void
        {
        }
        public function testConstraintTraversableEvaluateMethodWithFailExampleWithCustomMessage() : void
        {
        }
        public function testConstraintTraversableToStringMethodsWithStdClass() : void
        {
        }
        public function testConstraintTraversableToStringMethods() : void
        {
        }
        public function testConstraintTraversableToStringMethodsWithSplObjectStorage() : void
        {
        }
        public function testConstraintTraversableStdClassForFailSplObjectStorage() : void
        {
        }
        public function testConstraintTraversableStdClassForFailSplObjectStorageWithCustomMessage() : void
        {
        }
    }
    class ExceptionMessageRegExpTest extends \PHPUnit\Framework\TestCase
    {
        public function testRegexMessage() : void
        {
        }
        public function testRegexMessageExtreme() : void
        {
        }
        /**
         * @runInSeparateProcess
         * @requires extension xdebug
         */
        public function testMessageXdebugScreamCompatibility() : void
        {
        }
        public function testSimultaneousLiteralAndRegExpExceptionMessage() : void
        {
        }
    }
    final class LogicalAndTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testSetConstraintsRejectsInvalidConstraint() : void
        {
        }
        public function testCountReturnsCountOfComposedConstraints() : void
        {
        }
        public function testToStringReturnsImplodedStringRepresentationOfComposedConstraintsGluedWithAnd() : void
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsFalseIfAnyOfTheComposedConstraintsEvaluateToFalse(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsTrueIfAllOfTheComposedConstraintsEvaluateToTrue(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionIfAnyOfTheComposedConstraintsEvaluateToFalse(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionWithCustomMessageIfAnyOfTheComposedConstraintsEvaluateToFalse(array $constraints) : void
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsNothingIfAllOfTheComposedConstraintsEvaluateToTrue(array $constraints) : void
        {
        }
        public function providerFailingConstraints() : \Generator
        {
        }
        public function providerSucceedingConstraints() : \Generator
        {
        }
        private function stringify(array $constraints) : string
        {
        }
    }
}
namespace Framework\Constraint {
    final class LogicalXorTest extends \PHPUnit\Framework\TestCase
    {
        public function testFromConstraintsReturnsConstraint() : void
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    class JsonMatchesErrorMessageProviderTest extends \PHPUnit\Framework\TestCase
    {
        public static function determineJsonErrorDataprovider() : array
        {
        }
        public static function translateTypeToPrefixDataprovider() : array
        {
        }
        /**
         * @dataProvider translateTypeToPrefixDataprovider
         *
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testTranslateTypeToPrefix($expected, $type) : void
        {
        }
        /**
         * @dataProvider determineJsonErrorDataprovider
         *
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testDetermineJsonError($expected, $error, $prefix) : void
        {
        }
    }
}
namespace PHPUnit\Runner {
    class PhptTestCaseTest extends \PHPUnit\Framework\TestCase
    {
        private const EXPECT_CONTENT = <<<EOF
--TEST--
EXPECT test
--FILE--
<?php echo "Hello PHPUnit!"; ?>
--EXPECT--
Hello PHPUnit!
EOF;
        private const EXPECTF_CONTENT = <<<EOF
--TEST--
EXPECTF test
--FILE--
<?php echo "Hello PHPUnit!"; ?>
--EXPECTF--
Hello %s!
EOF;
        private const EXPECTREGEX_CONTENT = <<<EOF
--TEST--
EXPECTREGEX test
--FILE--
<?php echo "Hello PHPUnit!"; ?>
--EXPECTREGEX--
Hello [HPU]{4}[nit]{3}!
EOF;
        private const FILE_SECTION = <<<EOF
<?php echo "Hello PHPUnit!"; ?>

EOF;
        /**
         * @var string
         */
        private $dirname;
        /**
         * @var string
         */
        private $filename;
        /**
         * @var PhptTestCase
         */
        private $testCase;
        /**
         * @var AbstractPhpProcess|\PHPUnit\Framework\MockObject\MockObject
         */
        private $phpProcess;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testAlwaysReportsNumberOfAssertionsIsOne() : void
        {
        }
        public function testAlwaysReportsItDoesNotUseADataprovider() : void
        {
        }
        public function testShouldRunFileSectionAsTest() : void
        {
        }
        public function testRenderFileSection() : void
        {
        }
        public function testRenderSkipifSection() : void
        {
        }
        public function testShouldRunSkipifSectionWhenExists() : void
        {
        }
        public function testShouldNotRunTestSectionIfSkipifSectionReturnsOutputWithSkipWord() : void
        {
        }
        public function testShouldRunCleanSectionWhenDefined() : void
        {
        }
        public function testShouldSkipTestWhenPhptFileIsEmpty() : void
        {
        }
        public function testShouldSkipTestWhenFileSectionIsMissing() : void
        {
        }
        public function testShouldSkipTestWhenThereIsNoExpecOrExpectifOrExpecregexSectionInPhptFile() : void
        {
        }
        public function testShouldSkipTestWhenSectionHeaderIsMalformed() : void
        {
        }
        public function testShouldValidateExpectSession() : void
        {
        }
        public function testShouldValidateExpectfSession() : void
        {
        }
        public function testShouldValidateExpectregexSession() : void
        {
        }
        /**
         * Defines the content of the current PHPT test.
         *
         * @param string $content
         */
        private function setPhpContent($content) : void
        {
        }
        /**
         * Ensures the correct line ending is used for comparison
         *
         * @param string $content
         *
         * @return string
         */
        private function ensureCorrectEndOfLine($content)
        {
        }
    }
    /**
     * @group test-reorder
     */
    class ResultCacheExtensionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var TestResultCache
         */
        protected $cache;
        /**
         * @var ResultCacheExtension
         */
        protected $extension;
        /**
         * @var TestResult
         */
        protected $result;
        protected function setUp() : void
        {
        }
        /**
         * @dataProvider longTestNamesDataprovider
         */
        public function testStripsDataproviderParametersFromTestName(string $testName, string $expectedTestName) : void
        {
        }
        public function longTestNamesDataprovider() : array
        {
        }
        public function testError() : void
        {
        }
        public function testFailure() : void
        {
        }
        public function testSkipped() : void
        {
        }
        public function testIncomplete() : void
        {
        }
        public function testPassedTestsOnlyCacheTime() : void
        {
        }
        public function testWarning() : void
        {
        }
        public function testRisky() : void
        {
        }
        public function testEmptySuite() : void
        {
        }
    }
    /**
     * @group test-reorder
     */
    class TestSuiteSorterTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * Constants to improve clarity of @dataprovider
         */
        private const IGNORE_DEPENDENCIES = false;
        private const RESOLVE_DEPENDENCIES = true;
        private const MULTIDEPENDENCYTEST_EXECUTION_ORDER = [\MultiDependencyTest::class . '::testOne', \MultiDependencyTest::class . '::testTwo', \MultiDependencyTest::class . '::testThree', \MultiDependencyTest::class . '::testFour', \MultiDependencyTest::class . '::testFive'];
        public function testThrowsExceptionWhenUsingInvalidOrderOption() : void
        {
        }
        public function testThrowsExceptionWhenUsingInvalidOrderDefectsOption() : void
        {
        }
        /**
         * @dataProvider suiteSorterOptionPermutationsProvider
         */
        public function testShouldNotAffectEmptyTestSuite(int $order, bool $resolveDependencies, int $orderDefects) : void
        {
        }
        /**
         * @dataProvider commonSorterOptionsProvider
         */
        public function testBasicExecutionOrderOptions(int $order, bool $resolveDependencies, array $expectedOrder) : void
        {
        }
        public function testCanSetRandomizationWithASeed() : void
        {
        }
        public function testCanSetRandomizationWithASeedAndResolveDependencies() : void
        {
        }
        /**
         * @dataProvider orderDurationWithoutCacheProvider
         */
        public function testOrderDurationWithoutCache(bool $resolveDependencies, array $expected) : void
        {
        }
        public function orderDurationWithoutCacheProvider() : array
        {
        }
        /**
         * @dataProvider orderDurationWithCacheProvider
         */
        public function testOrderDurationWithCache(bool $resolveDependencies, array $testTimes, array $expected) : void
        {
        }
        public function orderDurationWithCacheProvider() : array
        {
        }
        /**
         * @dataProvider defectsSorterOptionsProvider
         */
        public function testSuiteSorterDefectsOptions(int $order, bool $resolveDependencies, array $runState, array $expected) : void
        {
        }
        /**
         * A @dataprovider for basic execution reordering options based on MultiDependencyTest
         * This class has the following relevant properties:
         * - it has five tests 'testOne' ... 'testFive'
         * - 'testThree' @depends on both 'testOne' and 'testTwo'
         * - 'testFour' @depends on 'MultiDependencyTest::testThree' to test FQN @depends
         * - 'testFive' has no dependencies
         */
        public function commonSorterOptionsProvider() : array
        {
        }
        /**
         * A @dataprovider for testing defects execution reordering options based on MultiDependencyTest
         * This class has the following relevant properties:
         * - it has five tests 'testOne' ... 'testFive'
         * - 'testThree' @depends on both 'testOne' and 'testTwo'
         * - 'testFour' @depends on 'MultiDependencyTest::testThree' to test FQN @depends
         * - 'testFive' has no dependencies
         */
        public function defectsSorterOptionsProvider() : array
        {
        }
        /**
         * @see https://github.com/lstrojny/phpunit-clever-and-smart/issues/38
         */
        public function testCanHandleSuiteWithEmptyTestCase() : void
        {
        }
        public function suiteSorterOptionPermutationsProvider() : array
        {
        }
    }
}
namespace PHPUnit\Runner\Filter {
    class NameFilterIteratorTest extends \PHPUnit\Framework\TestCase
    {
        public function testCaseSensitiveMatch() : void
        {
        }
        public function testCaseInsensitiveMatch() : void
        {
        }
        private function createFilter(string $filter) : \PHPUnit\Runner\Filter\NameFilterIterator
        {
        }
    }
}
namespace {
    class Issue1021Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provider
         */
        public function testSomething($data) : void
        {
        }
        /**
         * @depends testSomething
         */
        public function testSomethingElse() : void
        {
        }
        public function provider()
        {
        }
    }
    /**
     * @group bar
     */
    class TwoTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething() : void
        {
        }
    }
    class ParentSuite
    {
        public static function suite()
        {
        }
    }
    class ChildSuite
    {
        public static function suite()
        {
        }
    }
    /**
     * @group foo
     */
    class OneTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething() : void
        {
        }
    }
    class Foo_Bar_Issue684Test extends \PHPUnit\Framework\TestCase
    {
    }
    class Issue578Test extends \PHPUnit\Framework\TestCase
    {
        public function testNoticesDoublePrintStackTrace() : void
        {
        }
        public function testWarningsDoublePrintStackTrace() : void
        {
        }
        public function testUnexpectedExceptionsPrintsCorrectly() : void
        {
        }
    }
    class Issue523Test extends \PHPUnit\Framework\TestCase
    {
        public function testAttributeEquals() : void
        {
        }
    }
    class Issue523 extends \ArrayIterator
    {
        protected $field = 'foo';
    }
    class Issue797Test extends \PHPUnit\Framework\TestCase
    {
        protected $preserveGlobalState = \false;
        public function testBootstrapPhpIsExecutedInIsolation() : void
        {
        }
    }
    class Issue2085Test extends \PHPUnit\Framework\TestCase
    {
        public function testShouldAbortSlowTestByEnforcingTimeLimit() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    class Issue1468Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @todo Implement this test
         */
        public function testFailure() : void
        {
        }
    }
    class Issue765Test extends \PHPUnit\Framework\TestCase
    {
        public function testDependee() : void
        {
        }
        /**
         * @depends testDependee
         * @dataProvider dependentProvider
         */
        public function testDependent($a) : void
        {
        }
        public function dependentProvider() : void
        {
        }
    }
}
namespace Test {
    class Issue3156Test extends \PHPUnit\Framework\TestCase
    {
        public function testConstants() : \stdClass
        {
        }
        public function dataSelectOperatorsProvider() : array
        {
        }
        /**
         * @depends testConstants
         * @dataProvider dataSelectOperatorsProvider
         */
        public function testDependsRequire(string $val, \stdClass $obj) : void
        {
        }
    }
}
namespace {
    class Issue3364SetupTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testOneWithSetupException() : void
        {
        }
        public function testTwoWithSetupException() : void
        {
        }
    }
    class Issue3364SetupBeforeClassTest extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass() : void
        {
        }
        public function testOneWithClassSetupException() : void
        {
        }
        public function testTwoWithClassSetupException() : void
        {
        }
    }
    class Issue1265Test extends \PHPUnit\Framework\TestCase
    {
        public function testTrue() : void
        {
        }
    }
    class Issue503Test extends \PHPUnit\Framework\TestCase
    {
        public function testCompareDifferentLineEndings() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Issue2811Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    class Issue2158Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * Set constant in main process
         */
        public function testSomething() : void
        {
        }
        /**
         * Constant defined previously in main process constant should be available and
         * no errors should be yielded by reload of included files
         *
         * @runInSeparateProcess
         */
        public function testSomethingElse() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Issue2731Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    class Issue1149Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testTwo() : void
        {
        }
    }
    class Issue1570Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    /**
     * @requires extension I_DO_NOT_EXIST
     */
    class Issue1374Test extends \PHPUnit\Framework\TestCase
    {
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testSomething() : void
        {
        }
    }
    class Issue244Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @expectedException Issue244Exception
         * @expectedExceptionCode 123StringCode
         */
        public function testWorks() : void
        {
        }
        /**
         * @expectedException Issue244Exception
         * @expectedExceptionCode OtherString
         */
        public function testFails() : void
        {
        }
        /**
         * @expectedException Issue244Exception
         * @expectedExceptionCode 123
         */
        public function testFailsTooIfExpectationIsANumber() : void
        {
        }
        /**
         * @expectedException Issue244ExceptionIntCode
         * @expectedExceptionCode 123String
         */
        public function testFailsTooIfExceptionCodeIsANumber() : void
        {
        }
    }
    class Issue244Exception extends \Exception
    {
        public function __construct()
        {
        }
    }
    class Issue244ExceptionIntCode extends \Exception
    {
        public function __construct()
        {
        }
    }
    class Issue2382Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider dataProvider
         */
        public function testOne($test) : void
        {
        }
        public function dataProvider()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ChildProcessClass1351
    {
    }
    class Issue1351Test extends \PHPUnit\Framework\TestCase
    {
        protected $instance;
        /**
         * @runInSeparateProcess
         */
        public function testFailurePre() : void
        {
        }
        public function testFailurePost() : void
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testExceptionPre() : void
        {
        }
        public function testExceptionPost() : void
        {
        }
        public function testPhpCoreLanguageException() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * @runClassInSeparateProcess
     */
    class SeparateClassRunMethodInNewProcessTest extends \PHPUnit\Framework\TestCase
    {
        public const PROCESS_ID_FILE_PATH = __DIR__ . '/parent_process_id.txt';
        public const INITIAL_MASTER_PID = 0;
        public const INITIAL_PID1 = 1;
        public static $masterPid = self::INITIAL_MASTER_PID;
        public static $pid1 = self::INITIAL_PID1;
        public static function setUpBeforeClass() : void
        {
        }
        public static function tearDownAfterClass() : void
        {
        }
        public function testMethodShouldGetDifferentPidThanMaster() : void
        {
        }
    }
    /**
     * @runTestsInSeparateProcesses
     * @preserveGlobalState enabled
     */
    class Issue1335Test extends \PHPUnit\Framework\TestCase
    {
        public function testGlobalString() : void
        {
        }
        public function testGlobalIntTruthy() : void
        {
        }
        public function testGlobalIntFalsey() : void
        {
        }
        public function testGlobalFloat() : void
        {
        }
        public function testGlobalBoolTrue() : void
        {
        }
        public function testGlobalBoolFalse() : void
        {
        }
        public function testGlobalNull() : void
        {
        }
        public function testGlobalArray() : void
        {
        }
        public function testGlobalNestedArray() : void
        {
        }
        public function testGlobalObject() : void
        {
        }
        public function testGlobalObjectWithBackSlashString() : void
        {
        }
        public function testGlobalObjectWithDoubleBackSlashString() : void
        {
        }
    }
}
namespace Issue2725 {
    /**
     * @runClassInSeparateProcess
     */
    class BeforeAfterClassPidTest extends \PHPUnit\Framework\TestCase
    {
        public const PID_VARIABLE = 'current_pid';
        /**
         * @beforeClass
         */
        public static function showPidBefore() : void
        {
        }
        /**
         * @afterClass
         */
        public static function showPidAfter() : void
        {
        }
        public function testMethod1WithItsBeforeAndAfter() : void
        {
        }
        public function testMethod2WithItsBeforeAndAfter() : void
        {
        }
    }
}
namespace {
    class Issue498Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @test
         * @dataProvider shouldBeTrueDataProvider
         * @group falseOnly
         */
        public function shouldBeTrue($testData) : void
        {
        }
        /**
         * @test
         * @dataProvider shouldBeFalseDataProvider
         * @group trueOnly
         */
        public function shouldBeFalse($testData) : void
        {
        }
        public function shouldBeTrueDataProvider()
        {
        }
        public function shouldBeFalseDataProvider()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Issue2145Test extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass() : void
        {
        }
        public function testOne() : void
        {
        }
        public function testTwo() : void
        {
        }
    }
}
namespace Test {
    class Issue3379Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
        /**
         * @depends testOne
         */
        public function testTwo() : void
        {
        }
    }
}
namespace PHPUnit\Framework {
    /**
     * A Listener for test progress.
     */
    interface TestListener
    {
        /**
         * An error occurred.
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
        /**
         * A warning occurred.
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void;
        /**
         * A failure occurred.
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void;
        /**
         * Incomplete test.
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
        /**
         * Risky test.
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
        /**
         * Skipped test.
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
        /**
         * A test suite started.
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void;
        /**
         * A test suite ended.
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void;
        /**
         * A test started.
         */
        public function startTest(\PHPUnit\Framework\Test $test) : void;
        /**
         * A test ended.
         */
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void;
    }
    trait TestListenerDefaultImplementation
    {
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
    }
}
namespace {
    class Issue3379TestListener implements \PHPUnit\Framework\TestListener
    {
        use \PHPUnit\Framework\TestListenerDefaultImplementation;
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
    }
    class Issue581Test extends \PHPUnit\Framework\TestCase
    {
        public function testExportingObjectsDoesNotBreakWindowsLineFeeds() : void
        {
        }
    }
    class Issue74Test extends \PHPUnit\Framework\TestCase
    {
        public function testCreateAndThrowNewExceptionInProcessIsolation() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class NewException extends \Exception
    {
    }
    class Issue1472Test extends \PHPUnit\Framework\TestCase
    {
        public function testAssertEqualXMLStructure() : void
        {
        }
    }
    class Issue322Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @group one
         */
        public function testOne() : void
        {
        }
        /**
         * @group two
         */
        public function testTwo() : void
        {
        }
    }
}
namespace Issue3107 {
    class Issue3107Test extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass() : void
        {
        }
        public function testOne() : void
        {
        }
    }
}
namespace {
    class Issue1437Test extends \PHPUnit\Framework\TestCase
    {
        public function testFailure() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Issue2137Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provideBrandService
         *
         * @throws Exception
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testBrandService($provided, $expected) : void
        {
        }
        public function provideBrandService()
        {
        }
        /**
         * @dataProvider provideBrandService
         *
         * @throws Exception
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testSomethingElseInvalid($provided, $expected) : void
        {
        }
    }
    class Issue2366
    {
        public function foo() : bool
        {
        }
    }
    class Issue2366Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provider
         */
        public function testOne($o) : void
        {
        }
        public function provider()
        {
        }
    }
    class Issue1348Test extends \PHPUnit\Framework\TestCase
    {
        public function testSTDOUT() : void
        {
        }
        public function testSTDERR() : void
        {
        }
    }
    class Issue445Test extends \PHPUnit\Framework\TestCase
    {
        public function testOutputWithExpectationBefore() : void
        {
        }
        public function testOutputWithExpectationAfter() : void
        {
        }
        public function testNotMatchingOutput() : void
        {
        }
    }
}
namespace Issue2972 {
    class Issue2972Test extends \PHPUnit\Framework\TestCase
    {
        public function testHello() : void
        {
        }
    }
}
namespace {
    class Issue1330Test extends \PHPUnit\Framework\TestCase
    {
        public function testTrue() : void
        {
        }
    }
    class Issue1337Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider dataProvider
         */
        public function testProvider($a) : void
        {
        }
        public function dataProvider()
        {
        }
    }
    class Issue433Test extends \PHPUnit\Framework\TestCase
    {
        public function testOutputWithExpectationBefore() : void
        {
        }
        public function testOutputWithExpectationAfter() : void
        {
        }
        public function testNotMatchingOutput() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Issue3093Test extends \PHPUnit\Framework\TestCase
    {
        public function someDataProvider() : array
        {
        }
        public function testFirstWithoutDependencies() : void
        {
        }
        /**
         * @depends testFirstWithoutDependencies
         * @dataProvider someDataProvider
         */
        public function testSecondThatDependsOnFirstAndDataprovider($value)
        {
        }
    }
    class Issue2380Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider generatorData
         */
        public function testGeneratorProvider($data) : void
        {
        }
        /**
         * @return Generator
         */
        public function generatorData()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Issue2435Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Issue2830Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider simpleDataProvider
         */
        public function testMethodUsesDataProvider() : void
        {
        }
        public function simpleDataProvider()
        {
        }
    }
    class Issue1216Test extends \PHPUnit\Framework\TestCase
    {
        public function testConfigAvailableInBootstrap() : void
        {
        }
    }
    class Issue1471Test extends \PHPUnit\Framework\TestCase
    {
        public function testFailure() : void
        {
        }
    }
}
namespace PHPUnit\Util {
    /**
     * Utility class that can print to STDOUT or write to a file.
     */
    class Printer
    {
        /**
         * If true, flush output after every write.
         *
         * @var bool
         */
        protected $autoFlush = false;
        /**
         * @var resource
         */
        protected $out;
        /**
         * @var string
         */
        protected $outTarget;
        /**
         * Constructor.
         *
         * @param null|mixed $out
         *
         * @throws Exception
         */
        public function __construct($out = null)
        {
        }
        /**
         * Flush buffer and close output if it's not to a PHP stream
         */
        public function flush() : void
        {
        }
        /**
         * Performs a safe, incremental flush.
         *
         * Do not confuse this function with the flush() function of this class,
         * since the flush() function may close the file being written to, rendering
         * the current object no longer usable.
         */
        public function incrementalFlush() : void
        {
        }
        public function write(string $buffer) : void
        {
        }
        /**
         * Check auto-flush mode.
         */
        public function getAutoFlush() : bool
        {
        }
        /**
         * Set auto-flushing mode.
         *
         * If set, *incremental* flushes will be done after each write. This should
         * not be confused with the different effects of this class' flush() method.
         */
        public function setAutoFlush(bool $autoFlush) : void
        {
        }
    }
}
namespace PHPUnit\Test {
    final class NullPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        use \PHPUnit\Framework\TestListenerDefaultImplementation;
    }
    final class HookTest extends \PHPUnit\Framework\TestCase
    {
        public function testSuccess() : void
        {
        }
        public function testFailure() : void
        {
        }
        public function testError() : void
        {
        }
        public function testIncomplete() : void
        {
        }
        public function testRisky() : void
        {
        }
        public function testSkipped() : void
        {
        }
        public function testWarning() : void
        {
        }
    }
}
namespace PHPUnit\Runner {
    interface Hook
    {
    }
    interface TestHook extends \PHPUnit\Runner\Hook
    {
    }
    interface AfterIncompleteTestHook extends \PHPUnit\Runner\TestHook
    {
        public function executeAfterIncompleteTest(string $test, string $message, float $time) : void;
    }
    interface AfterLastTestHook extends \PHPUnit\Runner\Hook
    {
        public function executeAfterLastTest() : void;
    }
    interface AfterRiskyTestHook extends \PHPUnit\Runner\TestHook
    {
        public function executeAfterRiskyTest(string $test, string $message, float $time) : void;
    }
    interface AfterSkippedTestHook extends \PHPUnit\Runner\TestHook
    {
        public function executeAfterSkippedTest(string $test, string $message, float $time) : void;
    }
    interface AfterSuccessfulTestHook extends \PHPUnit\Runner\TestHook
    {
        public function executeAfterSuccessfulTest(string $test, float $time) : void;
    }
    interface AfterTestErrorHook extends \PHPUnit\Runner\TestHook
    {
        public function executeAfterTestError(string $test, string $message, float $time) : void;
    }
    interface AfterTestFailureHook extends \PHPUnit\Runner\TestHook
    {
        public function executeAfterTestFailure(string $test, string $message, float $time) : void;
    }
    interface AfterTestHook extends \PHPUnit\Runner\Hook
    {
        /**
         * This hook will fire after any test, regardless of the result.
         *
         * For more fine grained control, have a look at the other hooks
         * that extend PHPUnit\Runner\Hook.
         */
        public function executeAfterTest(string $test, float $time) : void;
    }
    interface AfterTestWarningHook extends \PHPUnit\Runner\TestHook
    {
        public function executeAfterTestWarning(string $test, string $message, float $time) : void;
    }
    interface BeforeFirstTestHook extends \PHPUnit\Runner\Hook
    {
        public function executeBeforeFirstTest() : void;
    }
    interface BeforeTestHook extends \PHPUnit\Runner\TestHook
    {
        public function executeBeforeTest(string $test) : void;
    }
}
namespace PHPUnit\Test {
    final class Extension implements \PHPUnit\Runner\AfterIncompleteTestHook, \PHPUnit\Runner\AfterLastTestHook, \PHPUnit\Runner\AfterRiskyTestHook, \PHPUnit\Runner\AfterSkippedTestHook, \PHPUnit\Runner\AfterSuccessfulTestHook, \PHPUnit\Runner\AfterTestErrorHook, \PHPUnit\Runner\AfterTestFailureHook, \PHPUnit\Runner\AfterTestHook, \PHPUnit\Runner\AfterTestWarningHook, \PHPUnit\Runner\BeforeFirstTestHook, \PHPUnit\Runner\BeforeTestHook
    {
        private $amountOfInjectedArguments = 0;
        public function __construct()
        {
        }
        public function tellAmountOfInjectedArguments() : void
        {
        }
        public function executeBeforeFirstTest() : void
        {
        }
        public function executeBeforeTest(string $test) : void
        {
        }
        public function executeAfterTest(string $test, float $time) : void
        {
        }
        public function executeAfterSuccessfulTest(string $test, float $time) : void
        {
        }
        public function executeAfterIncompleteTest(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterRiskyTest(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterSkippedTest(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterTestError(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterTestFailure(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterTestWarning(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterLastTest() : void
        {
        }
    }
}
namespace {
    class TestAutoreferenced extends \PHPUnit\Framework\TestCase
    {
        public $myTestData;
        public function testJsonEncodeException($data) : void
        {
        }
    }
    class ExceptionInSetUpTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testSomething() : void
        {
        }
        protected function assertPreConditions() : void
        {
        }
        protected function assertPostConditions() : void
        {
        }
    }
    class NamespaceCoveragePublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<public>
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class BeforeClassWithOnlyDataProviderTest extends \PHPUnit\Framework\TestCase
    {
        public static $setUpBeforeClassWasCalled;
        public static $beforeClassWasCalled;
        public static function resetProperties() : void
        {
        }
        /**
         * @beforeClass
         */
        public static function someAnnotatedSetupMethod() : void
        {
        }
        public static function setUpBeforeClass() : void
        {
        }
        public function dummyProvider()
        {
        }
        /**
         * @dataProvider dummyProvider
         * delete annotation to fail test case
         */
        public function testDummy() : void
        {
        }
    }
}
namespace Foo {
    class CoveredParentClass
    {
        public function publicMethod() : void
        {
        }
        protected function protectedMethod() : void
        {
        }
        private function privateMethod() : void
        {
        }
    }
    class CoveredClass extends \Foo\CoveredParentClass
    {
        public function publicMethod() : void
        {
        }
        protected function protectedMethod() : void
        {
        }
        private function privateMethod() : void
        {
        }
    }
}
namespace {
    class DataProviderIncompleteTest extends \PHPUnit\Framework\TestCase
    {
        public static function providerMethod()
        {
        }
        /**
         * @dataProvider incompleteTestProviderMethod
         */
        public function testIncomplete($a, $b, $c) : void
        {
        }
        /**
         * @dataProvider providerMethod
         */
        public function testAdd($a, $b, $c) : void
        {
        }
        public function incompleteTestProviderMethod()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class FunctionCallbackWrapper
    {
        public static function functionCallback()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * @codeCoverageIgnore
     */
    class IgnoreCodeCoverageClass
    {
        public function returnTrue()
        {
        }
        public function returnFalse()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * @requires PHP 5.3
     * @requires PHPUnit 4.0
     * @requires OS Linux
     * @requires function testFuncClass
     * @requires extension testExtClass
     */
    class RequirementsClassDocBlockTest
    {
        /**
         * @requires PHP 5.4
         * @requires PHPUnit 3.7
         * @requires OS WINNT
         * @requires function testFuncMethod
         * @requires extension testExtMethod
         */
        public function testMethod() : void
        {
        }
    }
    class BankAccountTest extends \PHPUnit\Framework\TestCase
    {
        private $ba;
        protected function setUp() : void
        {
        }
        public function testBalanceIsInitiallyZero() : void
        {
        }
        public function testBalanceCannotBecomeNegative() : void
        {
        }
        public function testBalanceCannotBecomeNegative2() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class AssertionExample
    {
        public function doSomething() : void
        {
        }
    }
    class CoverageMethodParenthesesWhitespaceTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod ( )
         */
        public function testSomething() : void
        {
        }
    }
    class DoesNotPerformAssertionsButPerformingAssertionsTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @doesNotPerformAssertions
         */
        public function testFalseAndTrueAreStillFine() : void
        {
        }
    }
    class OutputTestCase extends \PHPUnit\Framework\TestCase
    {
        public function testExpectOutputStringFooActualFoo() : void
        {
        }
        public function testExpectOutputStringFooActualBar() : void
        {
        }
        public function testExpectOutputRegexFooActualFoo() : void
        {
        }
        public function testExpectOutputRegexFooActualBar() : void
        {
        }
    }
    class IniTest extends \PHPUnit\Framework\TestCase
    {
        public function testIni() : void
        {
        }
    }
    class CoverageMethodNothingTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @coversNothing
         */
        public function testSomething() : void
        {
        }
    }
    class FatalTest extends \PHPUnit\Framework\TestCase
    {
        public function testFatalError() : void
        {
        }
    }
    trait T3194
    {
        public function doSomethingElse() : bool
        {
        }
    }
    final class C3194
    {
        use \T3194;
        public function doSomething() : bool
        {
        }
    }
    /**
     * @covers C3194
     */
    final class Test3194 extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    class CoverageNoneTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ClassThatImplementsSerializable implements \Serializable
    {
        public function serialize()
        {
        }
        public function unserialize($serialized)
        {
        }
    }
}
namespace PHPUnit\TextUI {
    /**
     * Prints the result of a TextUI TestRunner run.
     */
    class ResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        public const EVENT_TEST_START = 0;
        public const EVENT_TEST_END = 1;
        public const EVENT_TESTSUITE_START = 2;
        public const EVENT_TESTSUITE_END = 3;
        public const COLOR_NEVER = 'never';
        public const COLOR_AUTO = 'auto';
        public const COLOR_ALWAYS = 'always';
        public const COLOR_DEFAULT = self::COLOR_NEVER;
        private const AVAILABLE_COLORS = [self::COLOR_NEVER, self::COLOR_AUTO, self::COLOR_ALWAYS];
        /**
         * @var array
         */
        private static $ansiCodes = ['bold' => 1, 'fg-black' => 30, 'fg-red' => 31, 'fg-green' => 32, 'fg-yellow' => 33, 'fg-blue' => 34, 'fg-magenta' => 35, 'fg-cyan' => 36, 'fg-white' => 37, 'bg-black' => 40, 'bg-red' => 41, 'bg-green' => 42, 'bg-yellow' => 43, 'bg-blue' => 44, 'bg-magenta' => 45, 'bg-cyan' => 46, 'bg-white' => 47];
        /**
         * @var int
         */
        protected $column = 0;
        /**
         * @var int
         */
        protected $maxColumn;
        /**
         * @var bool
         */
        protected $lastTestFailed = false;
        /**
         * @var int
         */
        protected $numAssertions = 0;
        /**
         * @var int
         */
        protected $numTests = -1;
        /**
         * @var int
         */
        protected $numTestsRun = 0;
        /**
         * @var int
         */
        protected $numTestsWidth;
        /**
         * @var bool
         */
        protected $colors = false;
        /**
         * @var bool
         */
        protected $debug = false;
        /**
         * @var bool
         */
        protected $verbose = false;
        /**
         * @var int
         */
        private $numberOfColumns;
        /**
         * @var bool
         */
        private $reverse;
        /**
         * @var bool
         */
        private $defectListPrinted = false;
        /**
         * Constructor.
         *
         * @param string     $colors
         * @param int|string $numberOfColumns
         * @param null|mixed $out
         *
         * @throws Exception
         */
        public function __construct($out = null, bool $verbose = false, $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
        {
        }
        public function printResult(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        /**
         * An error occurred.
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A failure occurred.
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        /**
         * A warning occurred.
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        /**
         * Incomplete test.
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Risky test.
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Skipped test.
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A testsuite started.
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A testsuite ended.
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A test started.
         */
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        /**
         * A test ended.
         */
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        protected function printDefects(array $defects, string $type) : void
        {
        }
        protected function printDefect(\PHPUnit\Framework\TestFailure $defect, int $count) : void
        {
        }
        protected function printDefectHeader(\PHPUnit\Framework\TestFailure $defect, int $count) : void
        {
        }
        protected function printDefectTrace(\PHPUnit\Framework\TestFailure $defect) : void
        {
        }
        protected function printErrors(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function printFailures(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function printWarnings(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function printIncompletes(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function printRisky(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function printSkipped(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function printHeader() : void
        {
        }
        protected function printFooter(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function writeProgress(string $progress) : void
        {
        }
        protected function writeNewLine() : void
        {
        }
        /**
         * Formats a buffer with a specified ANSI color sequence if colors are
         * enabled.
         */
        protected function formatWithColor(string $color, string $buffer) : string
        {
        }
        /**
         * Writes a buffer out with a color sequence if colors are enabled.
         */
        protected function writeWithColor(string $color, string $buffer, bool $lf = true) : void
        {
        }
        /**
         * Writes progress with a color sequence if colors are enabled.
         */
        protected function writeProgressWithColor(string $color, string $buffer) : void
        {
        }
        private function writeCountString(int $count, string $name, string $color, bool $always = false) : void
        {
        }
    }
}
namespace {
    class CustomPrinter extends \PHPUnit\TextUI\ResultPrinter
    {
    }
    class MultipleDataProviderTest extends \PHPUnit\Framework\TestCase
    {
        public static function providerA()
        {
        }
        public static function providerB()
        {
        }
        public static function providerC()
        {
        }
        public static function providerD()
        {
        }
        public static function providerE()
        {
        }
        public static function providerF()
        {
        }
        /**
         * @dataProvider providerA
         * @dataProvider providerB
         * @dataProvider providerC
         */
        public function testOne() : void
        {
        }
        /**
         * @dataProvider providerD
         * @dataProvider providerE
         * @dataProvider providerF
         */
        public function testTwo() : void
        {
        }
    }
    class DataProviderTest extends \PHPUnit\Framework\TestCase
    {
        public static function providerMethod()
        {
        }
        /**
         * @dataProvider providerMethod
         */
        public function testAdd($a, $b, $c) : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    trait ExampleTrait
    {
        public function ohHai()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A book.
     */
    class Book
    {
        // the order of properties is important for testing the cycle!
        public $author;
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface AnotherInterface
    {
        public function doSomethingElse();
    }
    class CoverageNotProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<!protected>
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ClassWithAllPossibleReturnTypes
    {
        public function methodWithNoReturnTypeDeclaration()
        {
        }
        public function methodWithVoidReturnTypeDeclaration() : void
        {
        }
        public function methodWithStringReturnTypeDeclaration() : string
        {
        }
        public function methodWithFloatReturnTypeDeclaration() : float
        {
        }
        public function methodWithIntReturnTypeDeclaration() : int
        {
        }
        public function methodWithBoolReturnTypeDeclaration() : bool
        {
        }
        public function methodWithArrayReturnTypeDeclaration() : array
        {
        }
        public function methodWithTraversableReturnTypeDeclaration() : \Traversable
        {
        }
        public function methodWithGeneratorReturnTypeDeclaration() : \Generator
        {
        }
        public function methodWithObjectReturnTypeDeclaration() : object
        {
        }
        public function methodWithClassReturnTypeDeclaration() : \stdClass
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ClassWithScalarTypeDeclarations
    {
        public function foo(string $string, int $int) : void
        {
        }
    }
    /**
     * @theTraitAnnotation
     */
    trait ParseTestMethodAnnotationsTrait
    {
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * @theClassAnnotation
     */
    class ParseTestMethodAnnotationsMock
    {
        use \ParseTestMethodAnnotationsTrait;
    }
    class TestSkipped extends \PHPUnit\Framework\TestCase
    {
        protected function runTest() : void
        {
        }
    }
    /**
     * @coversDefaultClass \Foo\CoveredClass
     */
    class NamespaceCoverageCoversClassTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::privateMethod
         * @covers ::protectedMethod
         * @covers ::publicMethod
         * @covers \Foo\CoveredParentClass::privateMethod
         * @covers \Foo\CoveredParentClass::protectedMethod
         * @covers \Foo\CoveredParentClass::publicMethod
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class VariousIterableDataProviderTest
    {
        public static function asArrayProvider()
        {
        }
        public static function asIteratorProvider()
        {
        }
        public static function asTraversableProvider()
        {
        }
        /**
         * @dataProvider asArrayProvider
         * @dataProvider asIteratorProvider
         * @dataProvider asTraversableProvider
         */
        public function test() : void
        {
        }
    }
    class NotPublicTestCase extends \PHPUnit\Framework\TestCase
    {
        public function testPublic() : void
        {
        }
        protected function testNotPublic() : void
        {
        }
    }
    /**
     * @coversNothing
     */
    class CoverageClassNothingTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ParentClassWithPrivateAttributes
    {
        private static $privateStaticParentAttribute = 'foo';
        private $privateParentAttribute = 'bar';
    }
    class ParentClassWithProtectedAttributes extends \ParentClassWithPrivateAttributes
    {
        protected static $protectedStaticParentAttribute = 'foo';
        protected $protectedParentAttribute = 'bar';
    }
    class ClassWithNonPublicAttributes extends \ParentClassWithProtectedAttributes
    {
        public static $publicStaticAttribute = 'foo';
        protected static $protectedStaticAttribute = 'bar';
        protected static $privateStaticAttribute = 'baz';
        public $publicAttribute = 'foo';
        public $foo = 1;
        public $bar = 2;
        public $publicArray = ['foo'];
        protected $protectedAttribute = 'bar';
        protected $privateAttribute = 'baz';
        protected $protectedArray = ['bar'];
        protected $privateArray = ['baz'];
    }
    /**
     * Tests for the BankAccount class.
     */
    class BankAccountWithCustomExtensionTest extends \PHPUnit\Framework\TestCase
    {
        protected $ba;
        protected function setUp() : void
        {
        }
        /**
         * @covers BankAccount::getBalance
         * @group balanceIsInitiallyZero
         * @group specification
         */
        public function testBalanceIsInitiallyZero() : void
        {
        }
        /**
         * @covers BankAccount::withdrawMoney
         * @group balanceCannotBecomeNegative
         * @group specification
         */
        public function testBalanceCannotBecomeNegative() : void
        {
        }
        /**
         * @covers BankAccount::depositMoney
         * @group balanceCannotBecomeNegative
         * @group specification
         */
        public function testBalanceCannotBecomeNegative2() : void
        {
        }
    }
    class NamespaceCoverageNotProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<!protected>
         */
        public function testSomething() : void
        {
        }
    }
    class NamespaceCoveragePrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<private>
         */
        public function testSomething() : void
        {
        }
    }
    class ChangeCurrentWorkingDirectoryTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomethingThatChangesTheCwd() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface MockTestInterface
    {
        public function returnAnything();
        public function returnAnythingElse();
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    final class FinalClass
    {
        private $value;
        public function __construct($value)
        {
        }
        public function value()
        {
        }
    }
    class ExceptionInTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testSomething() : void
        {
        }
        protected function assertPreConditions() : void
        {
        }
        protected function assertPostConditions() : void
        {
        }
    }
    class TestWarning extends \PHPUnit\Framework\TestCase
    {
        protected function runTest() : void
        {
        }
    }
    class DependencySuccessTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
        /**
         * @depends testOne
         */
        public function testTwo() : void
        {
        }
        /**
         * @depends DependencySuccessTest::testTwo
         */
        public function testThree() : void
        {
        }
    }
    class CoverageNamespacedFunctionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers foo\func()
         */
        public function testFunc() : void
        {
        }
    }
    class MultiDependencyTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
        public function testTwo()
        {
        }
        /**
         * @depends testOne
         * @depends testTwo
         */
        public function testThree($a, $b) : void
        {
        }
        /**
         * @depends MultiDependencyTest::testThree
         */
        public function testFour()
        {
        }
        public function testFive()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class MethodCallbackByReference
    {
        public function bar(&$a, &$b, $c)
        {
        }
        public function callback(&$a, &$b, $c)
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class StaticMockTestClass
    {
        public static function doSomething()
        {
        }
        public static function doSomethingElse()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PartialMockTestClass
    {
        public $constructorCalled = \false;
        public function __construct()
        {
        }
        public function doSomething()
        {
        }
        public function doAnotherThing()
        {
        }
    }
    class NamespaceCoverageNotPrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<!private>
         */
        public function testSomething() : void
        {
        }
    }
    abstract class AbstractTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ConcreteWithMyCustomExtensionTest extends \AbstractTest
    {
        public function testTwo() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class SampleClass
    {
        public $a;
        public $b;
        public $c;
        public function __construct($a, $b, $c)
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class DummyException extends \Exception
    {
    }
    /**
     * @runTestsInSeparateProcesses
     */
    class SeparateProcessesTest extends \PHPUnit\Framework\TestCase
    {
        public function testFoo() : void
        {
        }
        public function testBar() : void
        {
        }
    }
    class CoveragePrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<private>
         */
        public function testSomething() : void
        {
        }
    }
    class ExceptionInTearDownAfterClassTest extends \PHPUnit\Framework\TestCase
    {
        public static function tearDownAfterClass() : void
        {
        }
        public function testOne() : void
        {
        }
        public function testTwo() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface AnInterface
    {
        public function doSomething();
    }
    class NotExistingCoveredElementTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers NotExistingClass
         */
        public function testOne() : void
        {
        }
        /**
         * @covers NotExistingClass::notExistingMethod
         */
        public function testTwo() : void
        {
        }
        /**
         * @covers NotExistingClass::<public>
         */
        public function testThree() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    trait TraitWithConstructor
    {
        private $value;
        public function __construct(string $value)
        {
        }
        public function value() : string
        {
        }
    }
}
namespace Foo\DataProviderIssue2922 {
    // the name of the class cannot match file name - if they match all is fine
    class SecondHelloWorldTest extends \PHPUnit\Framework\TestCase
    {
        public function testSecond() : void
        {
        }
    }
    /**
     * @group foo
     */
    class FirstTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provide
         */
        public function testFirst($x) : void
        {
        }
        public function provide() : void
        {
        }
    }
}
namespace {
    class OneTestCase extends \PHPUnit\Framework\TestCase
    {
        public function noTestCase() : void
        {
        }
        public function testCase($arg = '') : void
        {
        }
    }
    class CoverageFunctionParenthesesTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::globalFunction()
         */
        public function testSomething() : void
        {
        }
    }
    class IncompleteTest extends \PHPUnit\Framework\TestCase
    {
        public function testIncomplete() : void
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    /**
     * Abstract base class for constraints which can be applied to any value.
     */
    abstract class Constraint implements \Countable, \PHPUnit\Framework\SelfDescribing
    {
        protected $exporter;
        public function __construct()
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Counts the number of constraint elements.
         */
        public function count() : int
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * This method can be overridden to implement the evaluation algorithm.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Throws an exception for the given compared value and test description
         *
         * @param mixed             $other             evaluated value or object
         * @param string            $description       Additional information about the test
         * @param ComparisonFailure $comparisonFailure
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null) : void
        {
        }
        /**
         * Return additional failure description where needed
         *
         * The function can be overridden to provide additional failure
         * information like a diff
         *
         * @param mixed $other evaluated value or object
         */
        protected function additionalFailureDescription($other) : string
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * To provide additional failure information additionalFailureDescription
         * can be used.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
    }
}
namespace {
    final class NamedConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        private $name;
        public static function fromName(string $name) : self
        {
        }
        public function matches($other) : bool
        {
        }
        public function toString() : string
        {
        }
    }
}
namespace PHPUnit\Runner {
    /**
     * Base class for all test runners.
     */
    abstract class BaseTestRunner
    {
        /**
         * @var int
         */
        public const STATUS_UNKNOWN = -1;
        /**
         * @var int
         */
        public const STATUS_PASSED = 0;
        /**
         * @var int
         */
        public const STATUS_SKIPPED = 1;
        /**
         * @var int
         */
        public const STATUS_INCOMPLETE = 2;
        /**
         * @var int
         */
        public const STATUS_FAILURE = 3;
        /**
         * @var int
         */
        public const STATUS_ERROR = 4;
        /**
         * @var int
         */
        public const STATUS_RISKY = 5;
        /**
         * @var int
         */
        public const STATUS_WARNING = 6;
        /**
         * @var string
         */
        public const SUITE_METHODNAME = 'suite';
        /**
         * Returns the loader to be used.
         */
        public function getLoader() : \PHPUnit\Runner\TestSuiteLoader
        {
        }
        /**
         * Returns the Test corresponding to the given suite.
         * This is a template method, subclasses override
         * the runFailed() and clearStatus() methods.
         *
         * @param string|string[] $suffixes
         *
         * @throws Exception
         */
        public function getTest(string $suiteClassName, string $suiteClassFile = '', $suffixes = '') : ?\PHPUnit\Framework\Test
        {
        }
        /**
         * Returns the loaded ReflectionClass for a suite name.
         */
        protected function loadSuiteClass(string $suiteClassName, string $suiteClassFile = '') : \ReflectionClass
        {
        }
        /**
         * Clears the status message.
         */
        protected function clearStatus() : void
        {
        }
        /**
         * Override to define how to handle a failed loading of
         * a test suite.
         */
        protected abstract function runFailed(string $message);
    }
}
namespace {
    class MockRunner extends \PHPUnit\Runner\BaseTestRunner
    {
        protected function runFailed($message) : void
        {
        }
    }
    class CoveragePublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<public>
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class TestIteratorAggregate2 implements \IteratorAggregate
    {
        private $traversable;
        public function __construct(\Traversable $traversable)
        {
        }
        public function getIterator()
        {
        }
    }
    class StopsOnWarningTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    class BeforeClassAndAfterClassTest extends \PHPUnit\Framework\TestCase
    {
        public static $beforeClassWasRun = 0;
        public static $afterClassWasRun = 0;
        public static function resetProperties() : void
        {
        }
        /**
         * @beforeClass
         */
        public static function initialClassSetup() : void
        {
        }
        /**
         * @afterClass
         */
        public static function finalClassTeardown() : void
        {
        }
        public function test1() : void
        {
        }
        public function test2() : void
        {
        }
    }
    class TemplateMethodsTest extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass() : void
        {
        }
        public static function tearDownAfterClass() : void
        {
        }
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testOne() : void
        {
        }
        public function testTwo() : void
        {
        }
        protected function assertPreConditions() : void
        {
        }
        protected function assertPostConditions() : void
        {
        }
        protected function onNotSuccessfulTest(\Throwable $t) : void
        {
        }
    }
    class NamespaceCoverageClassExtendedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass<extended>
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Mockable
    {
        public $constructorArgs;
        public $cloned;
        public function __construct($arg1 = \null, $arg2 = \null)
        {
        }
        public function __clone()
        {
        }
        public function mockableMethod()
        {
        }
        public function anotherMockableMethod()
        {
        }
    }
}
namespace PHPUnit\TextUI {
    /**
     * A TestRunner for the Command Line Interface (CLI)
     * PHP SAPI Module.
     */
    class Command
    {
        /**
         * @var array
         */
        protected $arguments = ['listGroups' => false, 'listSuites' => false, 'listTests' => false, 'listTestsXml' => false, 'loader' => null, 'useDefaultConfiguration' => true, 'loadedExtensions' => [], 'notLoadedExtensions' => []];
        /**
         * @var array
         */
        protected $options = [];
        /**
         * @var array
         */
        protected $longOptions = ['atleast-version=' => null, 'prepend=' => null, 'bootstrap=' => null, 'cache-result' => null, 'cache-result-file=' => null, 'check-version' => null, 'colors==' => null, 'columns=' => null, 'configuration=' => null, 'coverage-clover=' => null, 'coverage-crap4j=' => null, 'coverage-html=' => null, 'coverage-php=' => null, 'coverage-text==' => null, 'coverage-xml=' => null, 'debug' => null, 'disallow-test-output' => null, 'disallow-resource-usage' => null, 'disallow-todo-tests' => null, 'default-time-limit=' => null, 'enforce-time-limit' => null, 'exclude-group=' => null, 'filter=' => null, 'generate-configuration' => null, 'globals-backup' => null, 'group=' => null, 'help' => null, 'resolve-dependencies' => null, 'ignore-dependencies' => null, 'include-path=' => null, 'list-groups' => null, 'list-suites' => null, 'list-tests' => null, 'list-tests-xml=' => null, 'loader=' => null, 'log-junit=' => null, 'log-teamcity=' => null, 'no-configuration' => null, 'no-coverage' => null, 'no-logging' => null, 'no-extensions' => null, 'order-by=' => null, 'printer=' => null, 'process-isolation' => null, 'repeat=' => null, 'dont-report-useless-tests' => null, 'random-order' => null, 'random-order-seed=' => null, 'reverse-order' => null, 'reverse-list' => null, 'static-backup' => null, 'stderr' => null, 'stop-on-defect' => null, 'stop-on-error' => null, 'stop-on-failure' => null, 'stop-on-warning' => null, 'stop-on-incomplete' => null, 'stop-on-risky' => null, 'stop-on-skipped' => null, 'fail-on-warning' => null, 'fail-on-risky' => null, 'strict-coverage' => null, 'disable-coverage-ignore' => null, 'strict-global-state' => null, 'teamcity' => null, 'testdox' => null, 'testdox-group=' => null, 'testdox-exclude-group=' => null, 'testdox-html=' => null, 'testdox-text=' => null, 'testdox-xml=' => null, 'test-suffix=' => null, 'testsuite=' => null, 'verbose' => null, 'version' => null, 'whitelist=' => null, 'dump-xdebug-filter=' => null];
        /**
         * @var bool
         */
        private $versionStringPrinted = false;
        /**
         * @throws \RuntimeException
         * @throws \PHPUnit\Framework\Exception
         * @throws \InvalidArgumentException
         */
        public static function main(bool $exit = true) : int
        {
        }
        /**
         * @throws \RuntimeException
         * @throws \ReflectionException
         * @throws \InvalidArgumentException
         * @throws Exception
         */
        public function run(array $argv, bool $exit = true) : int
        {
        }
        /**
         * Create a TestRunner, override in subclasses.
         */
        protected function createRunner() : \PHPUnit\TextUI\TestRunner
        {
        }
        /**
         * Handles the command-line arguments.
         *
         * A child class of PHPUnit\TextUI\Command can hook into the argument
         * parsing by adding the switch(es) to the $longOptions array and point to a
         * callback method that handles the switch(es) in the child class like this
         *
         * <code>
         * <?php
         * class MyCommand extends PHPUnit\TextUI\Command
         * {
         *     public function __construct()
         *     {
         *         // my-switch won't accept a value, it's an on/off
         *         $this->longOptions['my-switch'] = 'myHandler';
         *         // my-secondswitch will accept a value - note the equals sign
         *         $this->longOptions['my-secondswitch='] = 'myOtherHandler';
         *     }
         *
         *     // --my-switch  -> myHandler()
         *     protected function myHandler()
         *     {
         *     }
         *
         *     // --my-secondswitch foo -> myOtherHandler('foo')
         *     protected function myOtherHandler ($value)
         *     {
         *     }
         *
         *     // You will also need this - the static keyword in the
         *     // PHPUnit\TextUI\Command will mean that it'll be
         *     // PHPUnit\TextUI\Command that gets instantiated,
         *     // not MyCommand
         *     public static function main($exit = true)
         *     {
         *         $command = new static;
         *
         *         return $command->run($_SERVER['argv'], $exit);
         *     }
         *
         * }
         * </code>
         *
         * @throws Exception
         */
        protected function handleArguments(array $argv) : void
        {
        }
        /**
         * Handles the loading of the PHPUnit\Runner\TestSuiteLoader implementation.
         */
        protected function handleLoader(string $loaderClass, string $loaderFile = '') : ?\PHPUnit\Runner\TestSuiteLoader
        {
        }
        /**
         * Handles the loading of the PHPUnit\Util\Printer implementation.
         *
         * @return null|Printer|string
         */
        protected function handlePrinter(string $printerClass, string $printerFile = '')
        {
        }
        /**
         * Loads a bootstrap file.
         */
        protected function handleBootstrap(string $filename) : void
        {
        }
        protected function handleVersionCheck() : void
        {
        }
        /**
         * Show the help message.
         */
        protected function showHelp() : void
        {
        }
        /**
         * Custom callback for test suite discovery.
         */
        protected function handleCustomTestSuite() : void
        {
        }
        private function printVersionString() : void
        {
        }
        private function exitWithErrorMessage(string $message) : void
        {
        }
        private function handleExtensions(string $directory) : void
        {
        }
        private function handleListGroups(\PHPUnit\Framework\TestSuite $suite, bool $exit) : int
        {
        }
        private function handleListSuites(bool $exit) : int
        {
        }
        private function handleListTests(\PHPUnit\Framework\TestSuite $suite, bool $exit) : int
        {
        }
        private function handleListTestsXml(\PHPUnit\Framework\TestSuite $suite, string $target, bool $exit) : int
        {
        }
        private function handleOrderByOption(string $value) : void
        {
        }
    }
}
namespace {
    class MyCommand extends \PHPUnit\TextUI\Command
    {
        public function __construct()
        {
        }
        public function myHandler($value) : void
        {
        }
    }
    class AssertionExampleTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
    }
    class NamespaceCoverageProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<protected>
         */
        public function testSomething() : void
        {
        }
    }
    class CoverageMethodNothingCoversMethod extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod
         * @coversNothing
         */
        public function testSomething() : void
        {
        }
    }
}
namespace Foo\DataProviderIssue2859 {
    class TestWithDataProviderTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provide
         */
        public function testFirst($x) : void
        {
        }
        public function provide()
        {
        }
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class TestProxyFixture
    {
        public function returnString()
        {
        }
        public function returnTypedString() : string
        {
        }
        public function returnObject()
        {
        }
        public function returnTypedObject() : \stdClass
        {
        }
        public function returnObjectOfFinalClass()
        {
        }
        public function returnTypedObjectOfFinalClass() : \FinalClass
        {
        }
    }
    class DependencyTestSuite
    {
        public static function suite()
        {
        }
    }
    class IsolationTest extends \PHPUnit\Framework\TestCase
    {
        public function testIsInIsolationReturnsFalse() : void
        {
        }
        public function testIsInIsolationReturnsTrue() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class WrapperIteratorAggregate implements \IteratorAggregate
    {
        /**
         * @var array|\Traversable
         */
        private $baseCollection;
        public function __construct($baseCollection)
        {
        }
        public function getIterator()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    abstract class AbstractMockTestClass implements \MockTestInterface
    {
        public abstract function doSomething();
        public function returnAnything()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class InheritedTestCase extends \OneTestCase
    {
        public function test2() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class NoTestCaseClass
    {
    }
    class ExceptionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * Exception message
         *
         * @var string
         */
        public const ERROR_MESSAGE = 'Exception message';
        /**
         * Exception message
         *
         * @var string
         */
        public const ERROR_MESSAGE_REGEX = '#regex#';
        /**
         * Exception code
         *
         * @var int
         */
        public const ERROR_CODE = 500;
        /**
         * @expectedException FooBarBaz
         */
        public function testOne() : void
        {
        }
        /**
         * @expectedException Foo_Bar_Baz
         */
        public function testTwo() : void
        {
        }
        /**
         * @expectedException Foo\Bar\Baz
         */
        public function testThree() : void
        {
        }
        /**
         * @expectedException ほげ
         */
        public function testFour() : void
        {
        }
        /**
         * @expectedException Class Message 1234
         */
        public function testFive() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage Message
         * @expectedExceptionCode 1234
         */
        public function testSix() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage Message
         * @expectedExceptionCode ExceptionCode
         */
        public function testSeven() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage Message
         * @expectedExceptionCode 0
         */
        public function testEight() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage ExceptionTest::ERROR_MESSAGE
         * @expectedExceptionCode ExceptionTest::ERROR_CODE
         */
        public function testNine() : void
        {
        }
        /** @expectedException Class */
        public function testSingleLine() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode ExceptionTest::UNKNOWN_CODE_CONSTANT
         * @expectedExceptionMessage ExceptionTest::UNKNOWN_MESSAGE_CONSTANT
         */
        public function testUnknownConstants() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode 1234
         * @expectedExceptionMessage Message
         * @expectedExceptionMessageRegExp #regex#
         */
        public function testWithRegexMessage() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode 1234
         * @expectedExceptionMessage Message
         * @expectedExceptionMessageRegExp ExceptionTest::ERROR_MESSAGE_REGEX
         */
        public function testWithRegexMessageFromClassConstant() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode 1234
         * @expectedExceptionMessage Message
         * @expectedExceptionMessageRegExp ExceptionTest::UNKNOWN_MESSAGE_REGEX_CONSTANT
         */
        public function testWithUnknowRegexMessageFromClassConstant() : void
        {
        }
    }
}
namespace Foo\DataProviderIssue2833 {
    class SecondTest extends \PHPUnit\Framework\TestCase
    {
        public const DUMMY = 'dummy';
        public function testSecond() : void
        {
        }
    }
    class FirstTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provide
         */
        public function testFirst($x) : void
        {
        }
        public function provide()
        {
        }
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class SingletonClass
    {
        public static function getInstance()
        {
        }
        protected function __construct()
        {
        }
        private function __sleep()
        {
        }
        private function __wakeup()
        {
        }
        private function __clone()
        {
        }
        public function doSomething()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * @coversDefaultClass \NamespaceOne
     * @coversDefaultClass \AnotherDefault\Name\Space\Does\Not\Work
     */
    class CoverageTwoDefaultClassAnnotations
    {
        /**
         * @covers Foo\CoveredClass::<public>
         */
        public function testSomething() : void
        {
        }
    }
    final class RouterTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider routesProvider
         * @testdox      Routes $url to $handler
         */
        public function testRoutesRequest(string $url, string $handler) : void
        {
        }
        public function routesProvider()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface InterfaceWithSemiReservedMethodName
    {
        public function unset();
    }
    class CoverageProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<protected>
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ArrayAccessible implements \ArrayAccess, \IteratorAggregate
    {
        private $array;
        public function __construct(array $array = [])
        {
        }
        public function offsetExists($offset)
        {
        }
        public function offsetGet($offset)
        {
        }
        public function offsetSet($offset, $value) : void
        {
        }
        public function offsetUnset($offset) : void
        {
        }
        public function getIterator()
        {
        }
    }
    class ExceptionInTestDetectedInTeardown extends \PHPUnit\Framework\TestCase
    {
        public $exceptionDetected = \false;
        protected function tearDown() : void
        {
        }
        public function testSomething() : void
        {
        }
    }
}
namespace vendor\project {
    class StatusTest extends \PHPUnit\Framework\TestCase
    {
        public function testSuccess() : void
        {
        }
        public function testFailure() : void
        {
        }
        public function testError() : void
        {
        }
        public function testIncomplete() : void
        {
        }
        public function testSkipped() : void
        {
        }
        public function testRisky() : void
        {
        }
        public function testWarning() : void
        {
        }
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class MethodCallback
    {
        public static function staticCallback()
        {
        }
        public function nonStaticCallback()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class TestIterator implements \Iterator
    {
        protected $array;
        protected $position = 0;
        public function __construct($array = [])
        {
        }
        public function rewind() : void
        {
        }
        public function valid()
        {
        }
        public function key()
        {
        }
        public function current()
        {
        }
        public function next() : void
        {
        }
    }
    final class MyTestListener implements \PHPUnit\Framework\TestListener
    {
        private $endCount = 0;
        private $errorCount = 0;
        private $failureCount = 0;
        private $warningCount = 0;
        private $notImplementedCount = 0;
        private $riskyCount = 0;
        private $skippedCount = 0;
        private $startCount = 0;
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        public function endCount() : int
        {
        }
        public function errorCount() : int
        {
        }
        public function failureCount() : int
        {
        }
        public function warningCount() : int
        {
        }
        public function notImplementedCount() : int
        {
        }
        public function riskyCount() : int
        {
        }
        public function skippedCount() : int
        {
        }
        public function startCount() : int
        {
        }
    }
    class CoverageNotPrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<!private>
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class DataProviderDependencyTest extends \PHPUnit\Framework\TestCase
    {
        public function testReference() : void
        {
        }
        /**
         * @see https://github.com/sebastianbergmann/phpunit/issues/1896
         * @depends testReference
         * @dataProvider provider
         */
        public function testDependency($param) : void
        {
        }
        public function provider()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A class with a __toString() method.
     */
    class ClassWithToString
    {
        public function __toString()
        {
        }
    }
    class CoverageClassWithoutAnnotationsTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class SampleArrayAccess implements \ArrayAccess
    {
        private $container;
        public function __construct()
        {
        }
        public function offsetSet($offset, $value) : void
        {
        }
        public function offsetExists($offset)
        {
        }
        public function offsetUnset($offset) : void
        {
        }
        public function offsetGet($offset)
        {
        }
    }
    class CoverageMethodTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod
         */
        public function testSomething() : void
        {
        }
    }
    class NamespaceCoverageNotPublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<!public>
         */
        public function testSomething() : void
        {
        }
    }
    class DependencyFailureTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
        /**
         * @depends testOne
         */
        public function testTwo() : void
        {
        }
        /**
         * @depends !clone testTwo
         */
        public function testThree() : void
        {
        }
        /**
         * @depends clone testOne
         */
        public function testFour() : void
        {
        }
        /**
         * This test has been added to check the printed warnings for the user
         * when a dependency simply doesn't exist.
         *
         * @depends doesNotExist
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/3517
         */
        public function testHandlesDependsAnnotationForNonexistentTests() : void
        {
        }
    }
    class StackTest extends \PHPUnit\Framework\TestCase
    {
        public function testPush()
        {
        }
        /**
         * @depends testPush
         */
        public function testPop(array $stack) : void
        {
        }
    }
    class ExceptionInTearDownTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testSomething() : void
        {
        }
        protected function assertPreConditions() : void
        {
        }
        protected function assertPostConditions() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Calculator
    {
        /**
         * @assert (0, 0) == 0
         * @assert (0, 1) == 1
         * @assert (1, 0) == 1
         * @assert (1, 1) == 2
         */
        public function add($a, $b)
        {
        }
    }
    class NotVoidTestCase extends \PHPUnit\Framework\TestCase
    {
    }
    final class CountConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        private $count;
        public static function fromCount(int $count) : self
        {
        }
        public function matches($other) : bool
        {
        }
        public function toString() : string
        {
        }
        public function count() : int
        {
        }
    }
    class InheritanceB extends \PHPUnit\Framework\TestCase
    {
        public function testSomething() : void
        {
        }
    }
    class InheritanceA extends \InheritanceB
    {
    }
    class DummyBarTest extends \PHPUnit\Framework\TestCase
    {
        public function testBarEqualsBar() : void
        {
        }
    }
    class StopOnWarningTestSuite
    {
        public static function suite()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class StringableClass
    {
        public function __toString()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface TraversableMockTestInterface extends \Traversable
    {
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class TestIterator2 implements \Iterator
    {
        protected $data;
        public function __construct(array $array)
        {
        }
        public function current()
        {
        }
        public function next() : void
        {
        }
        public function key()
        {
        }
        public function valid()
        {
        }
        public function rewind() : void
        {
        }
    }
    class CoverageNotPublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<!public>
         */
        public function testSomething() : void
        {
        }
    }
    class TestError extends \PHPUnit\Framework\TestCase
    {
        protected function runTest() : void
        {
        }
    }
    class DataProviderSkippedTest extends \PHPUnit\Framework\TestCase
    {
        public static function providerMethod()
        {
        }
        /**
         * @dataProvider skippedTestProviderMethod
         */
        public function testSkipped($a, $b, $c) : void
        {
        }
        /**
         * @dataProvider providerMethod
         */
        public function testAdd($a, $b, $c) : void
        {
        }
        public function skippedTestProviderMethod()
        {
        }
    }
    class DataProviderDebugTest extends \PHPUnit\Framework\TestCase
    {
        public static function provider()
        {
        }
        /**
         * @dataProvider provider
         */
        public function testProvider() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class SomeClass
    {
        public function doSomething($a, $b)
        {
        }
        public function doSomethingElse($c)
        {
        }
    }
    /**
     * @coversNothing
     */
    class CoverageCoversOverridesCoversNothingTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A class with a method that takes a variadic argument.
     */
    class ClassWithVariadicArgumentMethod
    {
        public function foo(...$args)
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface InterfaceWithStaticMethod
    {
        public static function staticMethod();
    }
    class CoverageMethodParenthesesTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod()
         */
        public function testSomething() : void
        {
        }
    }
}
namespace My\Space {
    class ExceptionNamespaceTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * Exception message
         *
         * @var string
         */
        public const ERROR_MESSAGE = 'Exception namespace message';
        /**
         * Exception code
         *
         * @var int
         */
        public const ERROR_CODE = 200;
        /**
         * @expectedException Class
         * @expectedExceptionMessage My\Space\ExceptionNamespaceTest::ERROR_MESSAGE
         * @expectedExceptionCode My\Space\ExceptionNamespaceTest::ERROR_CODE
         */
        public function testConstants() : void
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode My\Space\ExceptionNamespaceTest::UNKNOWN_CODE_CONSTANT
         * @expectedExceptionMessage My\Space\ExceptionNamespaceTest::UNKNOWN_MESSAGE_CONSTANT
         */
        public function testUnknownConstants() : void
        {
        }
    }
}
namespace {
    class TestRisky extends \PHPUnit\Framework\TestCase
    {
        protected function runTest() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface ExceptionWithThrowable extends \Throwable
    {
        public function getAdditionalInformation();
    }
    class DoNoAssertionTestCase extends \PHPUnit\Framework\TestCase
    {
        public function testNothing() : void
        {
        }
    }
    class ExceptionInAssertPreConditionsTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testSomething() : void
        {
        }
        protected function assertPreConditions() : void
        {
        }
        protected function assertPostConditions() : void
        {
        }
    }
    /**
     * @coversDefaultClass \Foo\CoveredClass
     */
    class NamespaceCoverageCoversClassPublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::publicMethod
         */
        public function testSomething() : void
        {
        }
    }
    class NoTestCases extends \PHPUnit\Framework\TestCase
    {
        public function noTestCase() : void
        {
        }
    }
    class ExceptionInAssertPostConditionsTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp() : void
        {
        }
        protected function tearDown() : void
        {
        }
        public function testSomething() : void
        {
        }
        protected function assertPreConditions() : void
        {
        }
        protected function assertPostConditions() : void
        {
        }
    }
    class CoverageClassTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass
         */
        public function testSomething() : void
        {
        }
    }
    class CoverageClassExtendedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass<extended>
         */
        public function testSomething() : void
        {
        }
    }
    class ClonedDependencyTest extends \PHPUnit\Framework\TestCase
    {
        private static $dependency;
        public static function setUpBeforeClass() : void
        {
        }
        public function testOne()
        {
        }
        /**
         * @depends testOne
         */
        public function testTwo($dependency) : void
        {
        }
        /**
         * @depends !clone testOne
         */
        public function testThree($dependency) : void
        {
        }
        /**
         * @depends clone testOne
         */
        public function testFour($dependency) : void
        {
        }
        /**
         * @depends !shallowClone testOne
         */
        public function testFive($dependency) : void
        {
        }
        /**
         * @depends shallowClone testOne
         */
        public function testSix($dependency) : void
        {
        }
    }
    class Success extends \PHPUnit\Framework\TestCase
    {
        protected function runTest() : void
        {
        }
    }
    class CoverageFunctionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::globalFunction
         */
        public function testSomething() : void
        {
        }
    }
    class RequirementsTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne() : void
        {
        }
        /**
         * @requires PHPUnit 1.0
         */
        public function testTwo() : void
        {
        }
        /**
         * @requires PHP 2.0
         */
        public function testThree() : void
        {
        }
        /**
         * @requires PHPUnit 2.0
         * @requires PHP 1.0
         */
        public function testFour() : void
        {
        }
        /**
         * @requires PHP 5.4.0RC6
         */
        public function testFive() : void
        {
        }
        /**
         * @requires PHP 5.4.0-alpha1
         */
        public function testSix() : void
        {
        }
        /**
         * @requires PHP 5.4.0beta2
         */
        public function testSeven() : void
        {
        }
        /**
         * @requires PHP 5.4-dev
         */
        public function testEight() : void
        {
        }
        /**
         * @requires function testFunc
         */
        public function testNine() : void
        {
        }
        /**
         * @requires function testFunc2
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/3459
         */
        public function testRequiresFunctionWithDigit() : void
        {
        }
        /**
         * @requires extension testExt
         */
        public function testTen() : void
        {
        }
        /**
         * @requires OS SunOS
         * @requires OSFAMILY Solaris
         */
        public function testEleven() : void
        {
        }
        /**
         * @requires PHP 99-dev
         * @requires PHPUnit 9-dev
         * @requires OS DOESNOTEXIST
         * @requires function testFuncOne
         * @requires function testFunc2
         * @requires extension testExtOne
         * @requires extension testExt2
         * @requires extension testExtThree 2.0
         * @requires setting not_a_setting Off
         */
        public function testAllPossibleRequirements() : void
        {
        }
        /**
         * @requires function array_merge
         */
        public function testExistingFunction() : void
        {
        }
        /**
         * @requires function ReflectionMethod::setAccessible
         */
        public function testExistingMethod() : void
        {
        }
        /**
         * @requires extension spl
         */
        public function testExistingExtension() : void
        {
        }
        /**
         * @requires OS .*
         */
        public function testExistingOs() : void
        {
        }
        /**
         * @requires PHPUnit 1111111
         */
        public function testAlwaysSkip() : void
        {
        }
        /**
         * @requires PHP 9999999
         */
        public function testAlwaysSkip2() : void
        {
        }
        /**
         * @requires OS DOESNOTEXIST
         */
        public function testAlwaysSkip3() : void
        {
        }
        /**
         * @requires OSFAMILY DOESNOTEXIST
         */
        public function testAlwaysSkip4() : void
        {
        }
        /**
         * @requires extension spl
         * @requires OS .*
         */
        public function testSpace() : void
        {
        }
        /**
         * @requires extension testExt 1.8.0
         */
        public function testSpecificExtensionVersion() : void
        {
        }
        /**
         * @requires PHP < 5.4
         */
        public function testPHPVersionOperatorLessThan() : void
        {
        }
        /**
         * @requires PHP <= 5.4
         */
        public function testPHPVersionOperatorLessThanEquals() : void
        {
        }
        /**
         * @requires PHP > 99
         */
        public function testPHPVersionOperatorGreaterThan() : void
        {
        }
        /**
         * @requires PHP >= 99
         */
        public function testPHPVersionOperatorGreaterThanEquals() : void
        {
        }
        /**
         * @requires PHP = 5.4
         */
        public function testPHPVersionOperatorEquals() : void
        {
        }
        /**
         * @requires PHP == 5.4
         */
        public function testPHPVersionOperatorDoubleEquals() : void
        {
        }
        /**
         * @requires PHP != 99
         */
        public function testPHPVersionOperatorBangEquals() : void
        {
        }
        /**
         * @requires PHP <> 99
         */
        public function testPHPVersionOperatorNotEquals() : void
        {
        }
        /**
         * @requires PHP >=99
         */
        public function testPHPVersionOperatorNoSpace() : void
        {
        }
        /**
         * @requires PHPUnit < 1.0
         */
        public function testPHPUnitVersionOperatorLessThan() : void
        {
        }
        /**
         * @requires PHPUnit <= 1.0
         */
        public function testPHPUnitVersionOperatorLessThanEquals() : void
        {
        }
        /**
         * @requires PHPUnit > 99
         */
        public function testPHPUnitVersionOperatorGreaterThan() : void
        {
        }
        /**
         * @requires PHPUnit >= 99
         */
        public function testPHPUnitVersionOperatorGreaterThanEquals() : void
        {
        }
        /**
         * @requires PHPUnit = 1.0
         */
        public function testPHPUnitVersionOperatorEquals() : void
        {
        }
        /**
         * @requires PHPUnit == 1.0
         */
        public function testPHPUnitVersionOperatorDoubleEquals() : void
        {
        }
        /**
         * @requires PHPUnit != 99
         */
        public function testPHPUnitVersionOperatorBangEquals() : void
        {
        }
        /**
         * @requires PHPUnit <> 99
         */
        public function testPHPUnitVersionOperatorNotEquals() : void
        {
        }
        /**
         * @requires PHPUnit >=99
         */
        public function testPHPUnitVersionOperatorNoSpace() : void
        {
        }
        /**
         * @requires extension testExtOne < 1.0
         */
        public function testExtensionVersionOperatorLessThan() : void
        {
        }
        /**
         * @requires extension testExtOne <= 1.0
         */
        public function testExtensionVersionOperatorLessThanEquals() : void
        {
        }
        /**
         * @requires extension testExtOne > 99
         */
        public function testExtensionVersionOperatorGreaterThan() : void
        {
        }
        /**
         * @requires extension testExtOne >= 99
         */
        public function testExtensionVersionOperatorGreaterThanEquals() : void
        {
        }
        /**
         * @requires extension testExtOne = 1.0
         */
        public function testExtensionVersionOperatorEquals() : void
        {
        }
        /**
         * @requires extension testExtOne == 1.0
         */
        public function testExtensionVersionOperatorDoubleEquals() : void
        {
        }
        /**
         * @requires extension testExtOne != 99
         */
        public function testExtensionVersionOperatorBangEquals() : void
        {
        }
        /**
         * @requires extension testExtOne <> 99
         */
        public function testExtensionVersionOperatorNotEquals() : void
        {
        }
        /**
         * @requires extension testExtOne >=99
         */
        public function testExtensionVersionOperatorNoSpace() : void
        {
        }
        /**
         * @requires PHP ~1.0
         * @requires PHPUnit ~2.0
         */
        public function testVersionConstraintTildeMajor() : void
        {
        }
        /**
         * @requires PHP ^1.0
         * @requires PHPUnit ^2.0
         */
        public function testVersionConstraintCaretMajor() : void
        {
        }
        /**
         * @requires PHP ~3.4.7
         * @requires PHPUnit ~4.7.1
         */
        public function testVersionConstraintTildeMinor() : void
        {
        }
        /**
         * @requires PHP ^7.0.17
         * @requires PHPUnit ^4.7.1
         */
        public function testVersionConstraintCaretMinor() : void
        {
        }
        /**
         * @requires PHP ^5.6 || ^7.0
         * @requires PHPUnit ^5.0 || ^6.0
         */
        public function testVersionConstraintCaretOr() : void
        {
        }
        /**
         * @requires PHP ~5.6.22 || ~7.0.17
         * @requires PHPUnit ^5.0.5 || ^6.0.6
         */
        public function testVersionConstraintTildeOr() : void
        {
        }
        /**
         * @requires PHP ~5.6.22 || ^7.0
         * @requires PHPUnit ~5.6.22 || ^7.0
         */
        public function testVersionConstraintTildeOrCaret() : void
        {
        }
        /**
         * @requires PHP ^5.6 || ~7.0.17
         * @requires PHPUnit ^5.6 || ~7.0.17
         */
        public function testVersionConstraintCaretOrTilde() : void
        {
        }
        /**
         * @requires   PHP        ~5.6.22 || ~7.0.17
         * @requires   PHPUnit    ~5.6.22 || ~7.0.17
         */
        public function testVersionConstraintRegexpIgnoresWhitespace() : void
        {
        }
        /**
         * @requires   PHP ~^12345
         */
        public function testVersionConstraintInvalidPhpConstraint() : void
        {
        }
        /**
         * @requires   PHPUnit ~^12345
         */
        public function testVersionConstraintInvalidPhpUnitConstraint() : void
        {
        }
        /**
         * @requires setting display_errors On
         */
        public function testSettingDisplayErrorsOn() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Singleton
    {
        private static $uniqueInstance = \null;
        public static function getInstance()
        {
        }
        protected function __construct()
        {
        }
        private function __clone()
        {
        }
    }
    class DoubleTestCase implements \PHPUnit\Framework\Test
    {
        protected $testCase;
        public function __construct(\PHPUnit\Framework\TestCase $testCase)
        {
        }
        public function count()
        {
        }
        public function run(\PHPUnit\Framework\TestResult $result = \null) : \PHPUnit\Framework\TestResult
        {
        }
    }
    class EmptyTestCaseTest extends \PHPUnit\Framework\TestCase
    {
    }
    class NotSelfDescribingTest implements \PHPUnit\Framework\Test
    {
        public function log($msg) : void
        {
        }
        public function count() : int
        {
        }
        public function run(\PHPUnit\Framework\TestResult $result = \null) : \PHPUnit\Framework\TestResult
        {
        }
    }
    final class TruthyConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        public function matches($other) : bool
        {
        }
        public function toString() : string
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class StopOnErrorTestSuite extends \PHPUnit\Framework\TestCase
    {
        public function testIncomplete()
        {
        }
        public function testWithError()
        {
        }
        public function testThatIsNeverReached()
        {
        }
    }
}
namespace PHPUnit\Util\TestDox {
    /**
     * This printer is for CLI output only. For the classes that output to file, html and xml,
     * please refer to the PHPUnit\Util\TestDox namespace
     */
    class CliTestDoxPrinter extends \PHPUnit\TextUI\ResultPrinter
    {
        /**
         * @var int[]
         */
        private $nonSuccessfulTestResults = [];
        /**
         * @var NamePrettifier
         */
        private $prettifier;
        /**
         * @var int The number of test results received from the TestRunner
         */
        private $testIndex = 0;
        /**
         * @var int The number of test results already sent to the output
         */
        private $testFlushIndex = 0;
        /**
         * @var array Buffer for write()
         */
        private $outputBuffer = [];
        /**
         * @var bool
         */
        private $bufferExecutionOrder = false;
        /**
         * @var array array<string>
         */
        private $originalExecutionOrder = [];
        /**
         * @var string Classname of the current test
         */
        private $className = '';
        /**
         * @var string Classname of the previous test; empty for first test
         */
        private $lastClassName = '';
        /**
         * @var string Prettified test name of current test
         */
        private $testMethod;
        /**
         * @var string Test result message of current test
         */
        private $testResultMessage;
        /**
         * @var bool Test result message of current test contains a verbose dump
         */
        private $lastFlushedTestWasVerbose = false;
        public function __construct($out = null, bool $verbose = false, $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
        {
        }
        public function setOriginalExecutionOrder(array $order) : void
        {
        }
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function bufferTestResult(\PHPUnit\Framework\Test $test, string $msg) : void
        {
        }
        public function writeTestResult(string $msg) : void
        {
        }
        public function writeProgress(string $progress) : void
        {
        }
        public function flush() : void
        {
        }
        public function printResult(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        protected function printHeader() : void
        {
        }
        private function flushOutputBuffer() : void
        {
        }
        private function writeBufferTestResult(array $prevResult, array $result) : void
        {
        }
        private function getTestResultByName(string $testName) : array
        {
        }
        private function formatTestSuiteHeader(?string $lastClassName, string $className, string $msg) : string
        {
        }
        private function formatTestResultMessage(string $symbol, string $resultMessage, float $time, bool $alwaysVerbose = false) : string
        {
        }
        private function getFormattedRuntime(float $time) : string
        {
        }
        private function getFormattedAdditionalInformation(string $resultMessage, bool $verbose) : string
        {
        }
        private function printNonSuccessfulTestsSummary(int $numberOfExecutedTests) : void
        {
        }
        private function getEmptyTestResult() : array
        {
        }
    }
    class TestableCliTestDoxPrinter extends \PHPUnit\Util\TestDox\CliTestDoxPrinter
    {
        private $buffer;
        public function write(string $text) : void
        {
        }
        public function getBuffer() : string
        {
        }
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ClassWithStaticMethod
    {
        public static function staticMethod()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    trait AbstractTrait
    {
        public abstract function doSomething();
        public function mockableMethod()
        {
        }
        public function anotherMockableMethod()
        {
        }
    }
    class DataProviderFilterTest extends \PHPUnit\Framework\TestCase
    {
        public static function truthProvider()
        {
        }
        public static function falseProvider()
        {
        }
        /**
         * @dataProvider truthProvider
         */
        public function testTrue($truth) : void
        {
        }
        /**
         * @dataProvider falseProvider
         */
        public function testFalse($false) : void
        {
        }
    }
    class BeforeAndAfterTest extends \PHPUnit\Framework\TestCase
    {
        public static $beforeWasRun;
        public static $afterWasRun;
        public static function resetProperties() : void
        {
        }
        /**
         * @before
         */
        public function initialSetup() : void
        {
        }
        /**
         * @after
         */
        public function finalTeardown() : void
        {
        }
        public function test1() : void
        {
        }
        public function test2() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ConcreteTest extends \AbstractTest
    {
        public function testTwo() : void
        {
        }
    }
    class Failure extends \PHPUnit\Framework\TestCase
    {
        protected function runTest() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Struct
    {
        public $var;
        public function __construct($var)
        {
        }
    }
    class NamespaceCoverageMethodTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::publicMethod
         */
        public function testSomething() : void
        {
        }
    }
    class CoverageMethodOneLineAnnotationTest extends \PHPUnit\Framework\TestCase
    {
        /** @covers CoveredClass::publicMethod */
        public function testSomething() : void
        {
        }
    }
    final class FalsyConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        public function matches($other) : bool
        {
        }
        public function toString() : string
        {
        }
    }
    class CoverageFunctionParenthesesWhitespaceTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::globalFunction ( )
         */
        public function testSomething() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class BankAccountException extends \RuntimeException
    {
    }
    /**
     * A bank account.
     */
    class BankAccount
    {
        /**
         * The bank account's balance.
         *
         * @var float
         */
        protected $balance = 0;
        /**
         * Returns the bank account's balance.
         *
         * @return float
         */
        public function getBalance()
        {
        }
        /**
         * Deposits an amount of money to the bank account.
         *
         * @param float $balance
         *
         * @throws BankAccountException
         */
        public function depositMoney($balance)
        {
        }
        /**
         * Withdraws an amount of money from the bank account.
         *
         * @param float $balance
         *
         * @throws BankAccountException
         */
        public function withdrawMoney($balance)
        {
        }
        /**
         * Sets the bank account's balance.
         *
         * @param float $balance
         *
         * @throws BankAccountException
         */
        protected function setBalance($balance) : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Foo
    {
        public function doSomething(\Bar $bar)
        {
        }
    }
    class NamespaceCoverageClassTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass
         */
        public function testSomething() : void
        {
        }
    }
    class TestIncomplete extends \PHPUnit\Framework\TestCase
    {
        protected function runTest() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class CoveredParentClass
    {
        public function publicMethod() : void
        {
        }
        protected function protectedMethod() : void
        {
        }
        private function privateMethod() : void
        {
        }
    }
    class CoveredClass extends \CoveredParentClass
    {
        public function publicMethod() : void
        {
        }
        protected function protectedMethod() : void
        {
        }
        private function privateMethod() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class TestIteratorAggregate implements \IteratorAggregate
    {
        private $traversable;
        public function __construct(\Traversable $traversable)
        {
        }
        public function getIterator()
        {
        }
    }
    class DummyFooTest extends \PHPUnit\Framework\TestCase
    {
        public function testFooEqualsFoo() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class NonStatic
    {
        public function suite() : void
        {
        }
    }
    class TestDoxGroupTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @group one
         */
        public function testOne() : void
        {
        }
        /**
         * @group two
         */
        public function testTwo() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * An author.
     */
    class Author
    {
        // the order of properties is important for testing the cycle!
        public $books = [];
        private $name = '';
        public function __construct($name)
        {
        }
    }
    class FailureTest extends \PHPUnit\Framework\TestCase
    {
        public function testAssertArrayEqualsArray() : void
        {
        }
        public function testAssertIntegerEqualsInteger() : void
        {
        }
        public function testAssertObjectEqualsObject() : void
        {
        }
        public function testAssertNullEqualsString() : void
        {
        }
        public function testAssertStringEqualsString() : void
        {
        }
        public function testAssertTextEqualsText() : void
        {
        }
        public function testAssertStringMatchesFormat() : void
        {
        }
        public function testAssertNumericEqualsNumeric() : void
        {
        }
        public function testAssertTextSameText() : void
        {
        }
        public function testAssertObjectSameObject() : void
        {
        }
        public function testAssertObjectSameNull() : void
        {
        }
        public function testAssertFloatSameFloat() : void
        {
        }
        // Note that due to the implementation of this assertion it counts as 2 asserts
        public function testAssertStringMatchesFormatFile() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Bar
    {
        public function doSomethingElse()
        {
        }
    }
    class IgnoreCodeCoverageClassTest extends \PHPUnit\Framework\TestCase
    {
        public function testReturnTrue() : void
        {
        }
        public function testReturnFalse() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ClassWithSelfTypeHint
    {
        public function foo(self $foo)
        {
        }
    }
    class TestWithTest extends \PHPUnit\Framework\TestCase
    {
        public static function providerMethod()
        {
        }
        /**
         * @testWith [0, 0, 0]
         *           [0, 1, 1]
         *           [1, 2, 3]
         *           [20, 22, 42]
         */
        public function testAdd($a, $b, $c) : void
        {
        }
    }
    class DataproviderExecutionOrderTest extends \PHPUnit\Framework\TestCase
    {
        public function testFirstTestThatAlwaysWorks()
        {
        }
        /**
         * @dataProvider dataproviderAdditions
         */
        public function testAddNumbersWithADataprovider(int $a, int $b, int $sum)
        {
        }
        public function testTestInTheMiddleThatAlwaysWorks()
        {
        }
        /**
         * @dataProvider dataproviderAdditions
         */
        public function testAddMoreNumbersWithADataprovider(int $a, int $b, int $sum)
        {
        }
        public function dataproviderAdditions()
        {
        }
    }
    class WasRun extends \PHPUnit\Framework\TestCase
    {
        public $wasRun = \false;
        protected function runTest() : void
        {
        }
    }
    /**
     * @requires extension nonExistingExtension
     */
    class RequirementsClassBeforeClassHookTest extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass() : void
        {
        }
    }
    class ThrowExceptionTestCase extends \PHPUnit\Framework\TestCase
    {
        public function test() : void
        {
        }
    }
    class DataProviderTestDoxTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provider
         * @testdox Does something
         */
        public function testOne() : void
        {
        }
        /**
         * @dataProvider provider
         */
        public function testDoesSomethingElse() : void
        {
        }
        /**
         * @dataProvider providerWithIndexedArray
         */
        public function testWithProviderWithIndexedArray($value) : void
        {
        }
        /**
         * @dataProvider placeHolderprovider
         * @testdox ... $value ...
         */
        public function testWithPlaceholders($value) : void
        {
        }
        public function provider()
        {
        }
        public function providerWithIndexedArray()
        {
        }
        public function placeHolderprovider() : array
        {
        }
    }
    class NothingTest extends \PHPUnit\Framework\TestCase
    {
        public function testNothing() : void
        {
        }
    }
    class ExceptionStackTest extends \PHPUnit\Framework\TestCase
    {
        public function testPrintingChildException() : void
        {
        }
        public function testNestedExceptions() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class NumericGroupAnnotationTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @testdox Empty test for @ticket numeric annotation values
         * @ticket  3502
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/3502
         */
        public function testTicketAnnotationSupportsNumericValue() : void
        {
        }
        /**
         * @testdox Empty test for @group numeric annotation values
         * @group   3502
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/3502
         */
        public function testGroupAnnotationSupportsNumericValue() : void
        {
        }
        public function testDummyTestThatShouldNotRun() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    interface AnInterfaceWithReturnType
    {
        public function returnAnArray() : array;
    }
    class ThrowNoExceptionTestCase extends \PHPUnit\Framework\TestCase
    {
        public function test() : void
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class TestGeneratorMaker
    {
        public function create($array = [])
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class OverrideTestCase extends \OneTestCase
    {
        public function testCase($arg = '') : void
        {
        }
    }
    class NoArgTestCaseTest extends \PHPUnit\Framework\TestCase
    {
        public function testNothing() : void
        {
        }
    }
}
namespace PHPUnit\TextUI {
    /**
     * A TestRunner for the Command Line Interface (CLI)
     * PHP SAPI Module.
     */
    class TestRunner extends \PHPUnit\Runner\BaseTestRunner
    {
        public const SUCCESS_EXIT = 0;
        public const FAILURE_EXIT = 1;
        public const EXCEPTION_EXIT = 2;
        /**
         * @var bool
         */
        protected static $versionStringPrinted = false;
        /**
         * @var CodeCoverageFilter
         */
        protected $codeCoverageFilter;
        /**
         * @var TestSuiteLoader
         */
        protected $loader;
        /**
         * @var ResultPrinter
         */
        protected $printer;
        /**
         * @var Runtime
         */
        private $runtime;
        /**
         * @var bool
         */
        private $messagePrinted = false;
        /**
         * @var Hook[]
         */
        private $extensions = [];
        /**
         * @param ReflectionClass|Test $test
         * @param bool                 $exit
         *
         * @throws \RuntimeException
         * @throws \InvalidArgumentException
         * @throws Exception
         * @throws \ReflectionException
         */
        public static function run($test, array $arguments = [], $exit = true) : \PHPUnit\Framework\TestResult
        {
        }
        public function __construct(\PHPUnit\Runner\TestSuiteLoader $loader = null, \SebastianBergmann\CodeCoverage\Filter $filter = null)
        {
        }
        /**
         * @throws \PHPUnit\Runner\Exception
         * @throws Exception
         * @throws \InvalidArgumentException
         * @throws \RuntimeException
         * @throws \ReflectionException
         */
        public function doRun(\PHPUnit\Framework\Test $suite, array $arguments = [], bool $exit = true) : \PHPUnit\Framework\TestResult
        {
        }
        public function setPrinter(\PHPUnit\TextUI\ResultPrinter $resultPrinter) : void
        {
        }
        /**
         * Returns the loader to be used.
         */
        public function getLoader() : \PHPUnit\Runner\TestSuiteLoader
        {
        }
        protected function createTestResult() : \PHPUnit\Framework\TestResult
        {
        }
        /**
         * Override to define how to handle a failed loading of
         * a test suite.
         */
        protected function runFailed(string $message) : void
        {
        }
        protected function write(string $buffer) : void
        {
        }
        /**
         * @throws Exception
         */
        protected function handleConfiguration(array &$arguments) : void
        {
        }
        /**
         * @throws \ReflectionException
         * @throws \InvalidArgumentException
         */
        private function processSuiteFilters(\PHPUnit\Framework\TestSuite $suite, array $arguments) : void
        {
        }
        private function writeMessage(string $type, string $message) : void
        {
        }
    }
}
namespace PHPUnit\Util {
    final class RegularExpression
    {
        /**
         * @throws \Exception
         *
         * @return false|int
         */
        public static function safeMatch(string $pattern, string $subject, ?array $matches = null, int $flags = 0, int $offset = 0)
        {
        }
    }
}
namespace PHPUnit\Runner {
    interface TestResultCacheInterface
    {
        public function getState($testName) : int;
        public function getTime($testName) : float;
        public function load() : void;
        public function persist() : void;
    }
    class TestResultCache implements \Serializable, \PHPUnit\Runner\TestResultCacheInterface
    {
        /**
         * @var string
         */
        public const DEFAULT_RESULT_CACHE_FILENAME = '.phpunit.result.cache';
        /**
         * Provide extra protection against incomplete or corrupt caches
         *
         * @var array<string, string>
         */
        private const ALLOWED_CACHE_TEST_STATUSES = [\PHPUnit\Runner\BaseTestRunner::STATUS_SKIPPED, \PHPUnit\Runner\BaseTestRunner::STATUS_INCOMPLETE, \PHPUnit\Runner\BaseTestRunner::STATUS_FAILURE, \PHPUnit\Runner\BaseTestRunner::STATUS_ERROR, \PHPUnit\Runner\BaseTestRunner::STATUS_RISKY, \PHPUnit\Runner\BaseTestRunner::STATUS_WARNING];
        /**
         * Path and filename for result cache file
         *
         * @var string
         */
        private $cacheFilename;
        /**
         * The list of defective tests
         *
         * <code>
         * // Mark a test skipped
         * $this->defects[$testName] = BaseTestRunner::TEST_SKIPPED;
         * </code>
         *
         * @var array array<string, int>
         */
        private $defects = [];
        /**
         * The list of execution duration of suites and tests (in seconds)
         *
         * <code>
         * // Record running time for test
         * $this->times[$testName] = 1.234;
         * </code>
         *
         * @var array<string, float>
         */
        private $times = [];
        public function __construct($filepath = null)
        {
        }
        public function persist() : void
        {
        }
        public function saveToFile() : void
        {
        }
        public function setState(string $testName, int $state) : void
        {
        }
        public function getState($testName) : int
        {
        }
        public function setTime(string $testName, float $time) : void
        {
        }
        public function getTime($testName) : float
        {
        }
        public function load() : void
        {
        }
        public function copyStateToCache(self $targetCache) : void
        {
        }
        public function clear() : void
        {
        }
        public function serialize() : string
        {
        }
        public function unserialize($serialized) : void
        {
        }
    }
}
namespace PHPUnit\Util {
    final class Type
    {
        public static function isType(string $type) : bool
        {
        }
    }
    final class Json
    {
        /**
         * Prettify json string
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public static function prettify(string $json) : string
        {
        }
        /*
         * To allow comparison of JSON strings, first process them into a consistent
         * format so that they can be compared as strings.
         * @return array ($error, $canonicalized_json)  The $error parameter is used
         * to indicate an error decoding the json.  This is used to avoid ambiguity
         * with JSON strings consisting entirely of 'null' or 'false'.
         */
        public static function canonicalize(string $json) : array
        {
        }
        /*
         * JSON object keys are unordered while PHP array keys are ordered.
         * Sort all array keys to ensure both the expected and actual values have
         * their keys in the same order.
         */
        private static function recursiveSort(&$json) : void
        {
        }
    }
    /**
     * Utility methods to load PHP sourcefiles.
     */
    final class FileLoader
    {
        /**
         * Checks if a PHP sourcecode file is readable. The sourcecode file is loaded through the load() method.
         *
         * As a fallback, PHP looks in the directory of the file executing the stream_resolve_include_path function.
         * We do not want to load the Test.php file here, so skip it if it found that.
         * PHP prioritizes the include_path setting, so if the current directory is in there, it will first look in the
         * current working directory.
         *
         * @throws Exception
         */
        public static function checkAndLoad(string $filename) : string
        {
        }
        /**
         * Loads a PHP sourcefile.
         */
        public static function load(string $filename) : void
        {
        }
    }
    /**
     * Filesystem helpers.
     */
    final class Filesystem
    {
        /**
         * Maps class names to source file names:
         *   - PEAR CS:   Foo_Bar_Baz -> Foo/Bar/Baz.php
         *   - Namespace: Foo\Bar\Baz -> Foo/Bar/Baz.php
         */
        public static function classNameToFilename(string $className) : string
        {
        }
        public static function createDirectory(string $directory) : bool
        {
        }
    }
    final class ConfigurationGenerator
    {
        /**
         * @var string
         */
        private const TEMPLATE = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/{phpunit_version}/phpunit.xsd"
         bootstrap="{bootstrap_script}"
         forceCoversAnnotation="true"
         beStrictAboutCoversAnnotation="true"
         beStrictAboutOutputDuringTests="true"
         beStrictAboutTodoAnnotatedTests="true"
         verbose="true">
    <testsuites>
        <testsuite name="default">
            <directory suffix="Test.php">{tests_directory}</directory>
        </testsuite>
    </testsuites>

    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">{src_directory}</directory>
        </whitelist>
    </filter>
</phpunit>

EOT;
        public function generateDefaultConfiguration(string $phpunitVersion, string $bootstrapScript, string $testsDirectory, string $srcDirectory) : string
        {
        }
    }
    /**
     * Utility class for blacklisting PHPUnit's own source code files.
     */
    final class Blacklist
    {
        /**
         * @var array
         */
        public static $blacklistedClassNames = [
            // composer
            \Composer\Autoload\ClassLoader::class => 1,
            // doctrine/instantiator
            \Doctrine\Instantiator\Instantiator::class => 1,
            // myclabs/deepcopy
            \DeepCopy\DeepCopy::class => 1,
            // phar-io/manifest
            \PharIo\Manifest\Manifest::class => 1,
            // phar-io/version
            \PharIo\Version\Version::class => 1,
            // phpdocumentor/reflection-common
            \phpDocumentor\Reflection\Project::class => 1,
            // phpdocumentor/reflection-docblock
            \phpDocumentor\Reflection\DocBlock::class => 1,
            // phpdocumentor/type-resolver
            \phpDocumentor\Reflection\Type::class => 1,
            // phpspec/prophecy
            \Prophecy\Prophet::class => 1,
            // phpunit/phpunit
            \PHPUnit\Framework\TestCase::class => 2,
            // phpunit/php-code-coverage
            \SebastianBergmann\CodeCoverage\CodeCoverage::class => 1,
            // phpunit/php-file-iterator
            \SebastianBergmann\FileIterator\Facade::class => 1,
            // phpunit/php-invoker
            \SebastianBergmann\Invoker\Invoker::class => 1,
            // phpunit/php-text-template
            \Text_Template::class => 1,
            // phpunit/php-timer
            \SebastianBergmann\Timer\Timer::class => 1,
            // phpunit/php-token-stream
            \PHP_Token::class => 1,
            // sebastian/code-unit-reverse-lookup
            \SebastianBergmann\CodeUnitReverseLookup\Wizard::class => 1,
            // sebastian/comparator
            \SebastianBergmann\Comparator\Comparator::class => 1,
            // sebastian/diff
            \SebastianBergmann\Diff\Diff::class => 1,
            // sebastian/environment
            \SebastianBergmann\Environment\Runtime::class => 1,
            // sebastian/exporter
            \SebastianBergmann\Exporter\Exporter::class => 1,
            // sebastian/global-state
            \SebastianBergmann\GlobalState\Snapshot::class => 1,
            // sebastian/object-enumerator
            \SebastianBergmann\ObjectEnumerator\Enumerator::class => 1,
            // sebastian/recursion-context
            \SebastianBergmann\RecursionContext\Context::class => 1,
            // sebastian/resource-operations
            \SebastianBergmann\ResourceOperations\ResourceOperations::class => 1,
            // sebastian/version
            \SebastianBergmann\Version::class => 1,
            // theseer/tokenizer
            \TheSeer\Tokenizer\Tokenizer::class => 1,
            // webmozart/assert
            \Webmozart\Assert\Assert::class => 1,
        ];
        /**
         * @var string[]
         */
        private static $directories;
        /**
         * @return string[]
         */
        public function getBlacklistedDirectories() : array
        {
        }
        public function isBlacklisted(string $file) : bool
        {
        }
        private function initialize() : void
        {
        }
    }
    /**
     * Command-line options parsing class.
     */
    final class Getopt
    {
        /**
         * @throws Exception
         */
        public static function getopt(array $args, string $short_options, array $long_options = null) : array
        {
        }
        /**
         * @throws Exception
         */
        private static function parseShortOption(string $arg, string $short_options, array &$opts, array &$args) : void
        {
        }
        /**
         * @throws Exception
         */
        private static function parseLongOption(string $arg, array $long_options, array &$opts, array &$args) : void
        {
        }
    }
    final class Xml
    {
        public static function import(\DOMElement $element) : \DOMElement
        {
        }
        /**
         * Load an $actual document into a DOMDocument.  This is called
         * from the selector assertions.
         *
         * If $actual is already a DOMDocument, it is returned with
         * no changes.  Otherwise, $actual is loaded into a new DOMDocument
         * as either HTML or XML, depending on the value of $isHtml. If $isHtml is
         * false and $xinclude is true, xinclude is performed on the loaded
         * DOMDocument.
         *
         * Note: prior to PHPUnit 3.3.0, this method loaded a file and
         * not a string as it currently does.  To load a file into a
         * DOMDocument, use loadFile() instead.
         *
         * @param DOMDocument|string $actual
         *
         * @throws Exception
         */
        public static function load($actual, bool $isHtml = false, string $filename = '', bool $xinclude = false, bool $strict = false) : \DOMDocument
        {
        }
        /**
         * Loads an XML (or HTML) file into a DOMDocument object.
         *
         * @throws Exception
         */
        public static function loadFile(string $filename, bool $isHtml = false, bool $xinclude = false, bool $strict = false) : \DOMDocument
        {
        }
        public static function removeCharacterDataNodes(\DOMNode $node) : void
        {
        }
        /**
         * Escapes a string for the use in XML documents
         *
         * Any Unicode character is allowed, excluding the surrogate blocks, FFFE,
         * and FFFF (not even as character reference).
         *
         * @see https://www.w3.org/TR/xml/#charsets
         */
        public static function prepareString(string $string) : string
        {
        }
        /**
         * "Convert" a DOMElement object into a PHP variable.
         */
        public static function xmlToVariable(\DOMElement $element)
        {
        }
        private static function convertToUtf8(string $string) : string
        {
        }
        private static function isUtf8(string $string) : bool
        {
        }
    }
    /**
     * Factory for PHPUnit\Framework\Exception objects that are used to describe
     * invalid arguments passed to a function or method.
     */
    final class InvalidArgumentHelper
    {
        public static function factory(int $argument, string $type, $value = null) : \PHPUnit\Framework\Exception
        {
        }
    }
    /**
     * Wrapper for the PHPUnit XML configuration file.
     *
     * Example XML configuration file:
     * <code>
     * <?xml version="1.0" encoding="utf-8" ?>
     *
     * <phpunit backupGlobals="false"
     *          backupStaticAttributes="false"
     *          bootstrap="/path/to/bootstrap.php"
     *          cacheResult="false"
     *          cacheResultFile=".phpunit.result.cache"
     *          cacheTokens="false"
     *          columns="80"
     *          colors="false"
     *          stderr="false"
     *          convertDeprecationsToExceptions="true"
     *          convertErrorsToExceptions="true"
     *          convertNoticesToExceptions="true"
     *          convertWarningsToExceptions="true"
     *          disableCodeCoverageIgnore="false"
     *          forceCoversAnnotation="false"
     *          processIsolation="false"
     *          stopOnDefect="false"
     *          stopOnError="false"
     *          stopOnFailure="false"
     *          stopOnWarning="false"
     *          stopOnIncomplete="false"
     *          stopOnRisky="false"
     *          stopOnSkipped="false"
     *          failOnWarning="false"
     *          failOnRisky="false"
     *          extensionsDirectory="tools/phpunit.d"
     *          printerClass="PHPUnit\TextUI\ResultPrinter"
     *          testSuiteLoaderClass="PHPUnit\Runner\StandardTestSuiteLoader"
     *          defaultTestSuite=""
     *          beStrictAboutChangesToGlobalState="false"
     *          beStrictAboutCoversAnnotation="false"
     *          beStrictAboutOutputDuringTests="false"
     *          beStrictAboutResourceUsageDuringSmallTests="false"
     *          beStrictAboutTestsThatDoNotTestAnything="false"
     *          beStrictAboutTodoAnnotatedTests="false"
     *          defaultTimeLimit="0"
     *          enforceTimeLimit="false"
     *          ignoreDeprecatedCodeUnitsFromCodeCoverage="false"
     *          timeoutForSmallTests="1"
     *          timeoutForMediumTests="10"
     *          timeoutForLargeTests="60"
     *          verbose="false"
     *          reverseDefectList="false"
     *          registerMockObjectsFromTestArgumentsRecursively="false"
     *          executionOrder="default"
     *          executionOrderDefects="default"
     *          resolveDependencies="false">
     *   <testsuites>
     *     <testsuite name="My Test Suite">
     *       <directory suffix="Test.php" phpVersion="5.3.0" phpVersionOperator=">=">/path/to/files</directory>
     *       <file phpVersion="5.3.0" phpVersionOperator=">=">/path/to/MyTest.php</file>
     *       <exclude>/path/to/files/exclude</exclude>
     *     </testsuite>
     *   </testsuites>
     *
     *   <groups>
     *     <include>
     *       <group>name</group>
     *     </include>
     *     <exclude>
     *       <group>name</group>
     *     </exclude>
     *   </groups>
     *
     *   <testdoxGroups>
     *     <include>
     *       <group>name</group>
     *     </include>
     *     <exclude>
     *       <group>name</group>
     *     </exclude>
     *   </testdoxGroups>
     *
     *   <filter>
     *     <whitelist addUncoveredFilesFromWhitelist="true"
     *                processUncoveredFilesFromWhitelist="false">
     *       <directory suffix=".php">/path/to/files</directory>
     *       <file>/path/to/file</file>
     *       <exclude>
     *         <directory suffix=".php">/path/to/files</directory>
     *         <file>/path/to/file</file>
     *       </exclude>
     *     </whitelist>
     *   </filter>
     *
     *   <listeners>
     *     <listener class="MyListener" file="/optional/path/to/MyListener.php">
     *       <arguments>
     *         <array>
     *           <element key="0">
     *             <string>Sebastian</string>
     *           </element>
     *         </array>
     *         <integer>22</integer>
     *         <string>April</string>
     *         <double>19.78</double>
     *         <null/>
     *         <object class="stdClass"/>
     *         <file>MyRelativeFile.php</file>
     *         <directory>MyRelativeDir</directory>
     *       </arguments>
     *     </listener>
     *   </listeners>
     *
     *   <logging>
     *     <log type="coverage-html" target="/tmp/report" lowUpperBound="50" highLowerBound="90"/>
     *     <log type="coverage-clover" target="/tmp/clover.xml"/>
     *     <log type="coverage-crap4j" target="/tmp/crap.xml" threshold="30"/>
     *     <log type="plain" target="/tmp/logfile.txt"/>
     *     <log type="teamcity" target="/tmp/logfile.txt"/>
     *     <log type="junit" target="/tmp/logfile.xml"/>
     *     <log type="testdox-html" target="/tmp/testdox.html"/>
     *     <log type="testdox-text" target="/tmp/testdox.txt"/>
     *     <log type="testdox-xml" target="/tmp/testdox.xml"/>
     *   </logging>
     *
     *   <php>
     *     <includePath>.</includePath>
     *     <ini name="foo" value="bar"/>
     *     <const name="foo" value="bar"/>
     *     <var name="foo" value="bar"/>
     *     <env name="foo" value="bar"/>
     *     <post name="foo" value="bar"/>
     *     <get name="foo" value="bar"/>
     *     <cookie name="foo" value="bar"/>
     *     <server name="foo" value="bar"/>
     *     <files name="foo" value="bar"/>
     *     <request name="foo" value="bar"/>
     *   </php>
     * </phpunit>
     * </code>
     */
    final class Configuration
    {
        /**
         * @var self[]
         */
        private static $instances = [];
        /**
         * @var \DOMDocument
         */
        private $document;
        /**
         * @var DOMXPath
         */
        private $xpath;
        /**
         * @var string
         */
        private $filename;
        /**
         * @var \LibXMLError[]
         */
        private $errors = [];
        /**
         * Returns a PHPUnit configuration object.
         *
         * @throws Exception
         */
        public static function getInstance(string $filename) : self
        {
        }
        /**
         * Loads a PHPUnit configuration file.
         *
         * @throws Exception
         */
        private function __construct(string $filename)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        private function __clone()
        {
        }
        public function hasValidationErrors() : bool
        {
        }
        public function getValidationErrors() : array
        {
        }
        /**
         * Returns the real path to the configuration file.
         */
        public function getFilename() : string
        {
        }
        public function getExtensionConfiguration() : array
        {
        }
        /**
         * Returns the configuration for SUT filtering.
         */
        public function getFilterConfiguration() : array
        {
        }
        /**
         * Returns the configuration for groups.
         */
        public function getGroupConfiguration() : array
        {
        }
        /**
         * Returns the configuration for testdox groups.
         */
        public function getTestdoxGroupConfiguration() : array
        {
        }
        /**
         * Returns the configuration for listeners.
         */
        public function getListenerConfiguration() : array
        {
        }
        /**
         * Returns the logging configuration.
         */
        public function getLoggingConfiguration() : array
        {
        }
        /**
         * Returns the PHP configuration.
         */
        public function getPHPConfiguration() : array
        {
        }
        /**
         * Handles the PHP configuration.
         */
        public function handlePHPConfiguration() : void
        {
        }
        /**
         * Returns the PHPUnit configuration.
         */
        public function getPHPUnitConfiguration() : array
        {
        }
        /**
         * Returns the test suite configuration.
         *
         * @throws Exception
         */
        public function getTestSuiteConfiguration(string $testSuiteFilter = '') : \PHPUnit\Framework\TestSuite
        {
        }
        /**
         * Returns the test suite names from the configuration.
         */
        public function getTestSuiteNames() : array
        {
        }
        private function validateConfigurationAgainstSchema() : void
        {
        }
        /**
         * Collects and returns the configuration arguments from the PHPUnit
         * XML configuration
         */
        private function getConfigurationArguments(\DOMNodeList $nodes) : array
        {
        }
        /**
         * @throws \PHPUnit\Framework\Exception
         */
        private function getTestSuite(\DOMElement $testSuiteNode, string $testSuiteFilter = '') : \PHPUnit\Framework\TestSuite
        {
        }
        private function satisfiesPhpVersion(\DOMElement $node) : bool
        {
        }
        /**
         * if $value is 'false' or 'true', this returns the value that $value represents.
         * Otherwise, returns $default, which may be a string in rare cases.
         * See PHPUnit\Util\ConfigurationTest::testPHPConfigurationIsReadCorrectly
         *
         * @param bool|string $default
         *
         * @return bool|string
         */
        private function getBoolean(string $value, $default)
        {
        }
        private function getInteger(string $value, int $default) : int
        {
        }
        private function readFilterDirectories(string $query) : array
        {
        }
        /**
         * @return string[]
         */
        private function readFilterFiles(string $query) : array
        {
        }
        private function toAbsolutePath(string $path, bool $useIncludePath = false) : string
        {
        }
        private function parseGroupConfiguration(string $root) : array
        {
        }
    }
}
namespace PHPUnit\Util\PHP {
    /**
     * Utility methods for PHP sub-processes.
     */
    abstract class AbstractPhpProcess
    {
        /**
         * @var Runtime
         */
        protected $runtime;
        /**
         * @var bool
         */
        protected $stderrRedirection = false;
        /**
         * @var string
         */
        protected $stdin = '';
        /**
         * @var string
         */
        protected $args = '';
        /**
         * @var array<string, string>
         */
        protected $env = [];
        /**
         * @var int
         */
        protected $timeout = 0;
        public static function factory() : self
        {
        }
        public function __construct()
        {
        }
        /**
         * Defines if should use STDERR redirection or not.
         *
         * Then $stderrRedirection is TRUE, STDERR is redirected to STDOUT.
         */
        public function setUseStderrRedirection(bool $stderrRedirection) : void
        {
        }
        /**
         * Returns TRUE if uses STDERR redirection or FALSE if not.
         */
        public function useStderrRedirection() : bool
        {
        }
        /**
         * Sets the input string to be sent via STDIN
         */
        public function setStdin(string $stdin) : void
        {
        }
        /**
         * Returns the input string to be sent via STDIN
         */
        public function getStdin() : string
        {
        }
        /**
         * Sets the string of arguments to pass to the php job
         */
        public function setArgs(string $args) : void
        {
        }
        /**
         * Returns the string of arguments to pass to the php job
         */
        public function getArgs() : string
        {
        }
        /**
         * Sets the array of environment variables to start the child process with
         *
         * @param array<string, string> $env
         */
        public function setEnv(array $env) : void
        {
        }
        /**
         * Returns the array of environment variables to start the child process with
         */
        public function getEnv() : array
        {
        }
        /**
         * Sets the amount of seconds to wait before timing out
         */
        public function setTimeout(int $timeout) : void
        {
        }
        /**
         * Returns the amount of seconds to wait before timing out
         */
        public function getTimeout() : int
        {
        }
        /**
         * Runs a single test in a separate PHP process.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function runTestJob(string $job, \PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result) : void
        {
        }
        /**
         * Returns the command based into the configurations.
         */
        public function getCommand(array $settings, string $file = null) : string
        {
        }
        /**
         * Runs a single job (PHP code) using a separate PHP process.
         */
        public abstract function runJob(string $job, array $settings = []) : array;
        protected function settingsToParameters(array $settings) : string
        {
        }
        /**
         * Processes the TestResult object from an isolated process.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        private function processChildResult(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result, string $stdout, string $stderr) : void
        {
        }
        /**
         * Gets the thrown exception from a PHPUnit\Framework\TestFailure.
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/74
         */
        private function getException(\PHPUnit\Framework\TestFailure $error) : \PHPUnit\Framework\Exception
        {
        }
    }
    /**
     * Default utility for PHP sub-processes.
     */
    class DefaultPhpProcess extends \PHPUnit\Util\PHP\AbstractPhpProcess
    {
        /**
         * @var string
         */
        protected $tempFile;
        /**
         * Runs a single job (PHP code) using a separate PHP process.
         *
         * @throws Exception
         */
        public function runJob(string $job, array $settings = []) : array
        {
        }
        /**
         * Returns an array of file handles to be used in place of pipes
         */
        protected function getHandles() : array
        {
        }
        /**
         * Handles creating the child process and returning the STDOUT and STDERR
         *
         * @throws Exception
         */
        protected function runProcess(string $job, array $settings) : array
        {
        }
        protected function process($pipe, string $job) : void
        {
        }
        protected function cleanup() : void
        {
        }
        protected function useTemporaryFile() : bool
        {
        }
    }
    /**
     * Windows utility for PHP sub-processes.
     *
     * Reading from STDOUT or STDERR hangs forever on Windows if the output is
     * too large.
     *
     * @see https://bugs.php.net/bug.php?id=51800
     */
    class WindowsPhpProcess extends \PHPUnit\Util\PHP\DefaultPhpProcess
    {
        public function getCommand(array $settings, string $file = null) : string
        {
        }
        protected function getHandles() : array
        {
        }
        protected function useTemporaryFile() : bool
        {
        }
    }
}
namespace PHPUnit\Util {
    final class Test
    {
        /**
         * @var int
         */
        public const UNKNOWN = -1;
        /**
         * @var int
         */
        public const SMALL = 0;
        /**
         * @var int
         */
        public const MEDIUM = 1;
        /**
         * @var int
         */
        public const LARGE = 2;
        /**
         * @var string
         *
         * @todo This constant should be private (it's public because of TestTest::testGetProvidedDataRegEx)
         */
        public const REGEX_DATA_PROVIDER = '/@dataProvider\\s+([a-zA-Z0-9._:-\\\\x7f-\\xff]+)/';
        /**
         * @var string
         */
        private const REGEX_TEST_WITH = '/@testWith\\s+/';
        /**
         * @var string
         */
        private const REGEX_EXPECTED_EXCEPTION = '(@expectedException\\s+([:.\\w\\\\x7f-\\xff]+)(?:[\\t ]+(\\S*))?(?:[\\t ]+(\\S*))?\\s*$)m';
        /**
         * @var string
         */
        private const REGEX_REQUIRES_VERSION = '/@requires\\s+(?P<name>PHP(?:Unit)?)\\s+(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+(dev|(RC|alpha|beta)[\\d\\.])?)[ \\t]*\\r?$/m';
        /**
         * @var string
         */
        private const REGEX_REQUIRES_VERSION_CONSTRAINT = '/@requires\\s+(?P<name>PHP(?:Unit)?)\\s+(?P<constraint>[\\d\\t \\-.|~^]+)[ \\t]*\\r?$/m';
        /**
         * @var string
         */
        private const REGEX_REQUIRES_OS = '/@requires\\s+(?P<name>OS(?:FAMILY)?)\\s+(?P<value>.+?)[ \\t]*\\r?$/m';
        /**
         * @var string
         */
        private const REGEX_REQUIRES_SETTING = '/@requires\\s+(?P<name>setting)\\s+(?P<setting>([^ ]+?))\\s*(?P<value>[\\w\\.-]+[\\w\\.]?)?[ \\t]*\\r?$/m';
        /**
         * @var string
         */
        private const REGEX_REQUIRES = '/@requires\\s+(?P<name>function|extension)\\s+(?P<value>([^\\s<>=!]+))\\s*(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+[\\d\\.]?)?[ \\t]*\\r?$/m';
        /**
         * @var array
         */
        private static $annotationCache = [];
        /**
         * @var array
         */
        private static $hookMethods = [];
        public static function describe(\PHPUnit\Framework\Test $test) : array
        {
        }
        public static function describeAsString(\PHPUnit\Framework\Test $test) : string
        {
        }
        /**
         * @throws CodeCoverageException
         *
         * @return array|bool
         */
        public static function getLinesToBeCovered(string $className, string $methodName)
        {
        }
        /**
         * Returns lines of code specified with the @uses annotation.
         *
         * @throws CodeCoverageException
         */
        public static function getLinesToBeUsed(string $className, string $methodName) : array
        {
        }
        /**
         * Returns the requirements for a test.
         *
         * @throws Warning
         */
        public static function getRequirements(string $className, string $methodName) : array
        {
        }
        /**
         * Returns the missing requirements for a test.
         *
         * @throws Warning
         *
         * @return string[]
         */
        public static function getMissingRequirements(string $className, string $methodName) : array
        {
        }
        /**
         * Returns the expected exception for a test.
         *
         * @return array|false
         */
        public static function getExpectedException(string $className, ?string $methodName)
        {
        }
        /**
         * Returns the provided data for a method.
         *
         * @throws Exception
         */
        public static function getProvidedData(string $className, string $methodName) : ?array
        {
        }
        /**
         * @throws Exception
         */
        public static function getDataFromTestWithAnnotation(string $docComment) : ?array
        {
        }
        public static function parseTestMethodAnnotations(string $className, ?string $methodName = '') : array
        {
        }
        public static function getInlineAnnotations(string $className, string $methodName) : array
        {
        }
        public static function parseAnnotations(string $docBlock) : array
        {
        }
        public static function getBackupSettings(string $className, string $methodName) : array
        {
        }
        public static function getDependencies(string $className, string $methodName) : array
        {
        }
        public static function getErrorHandlerSettings(string $className, ?string $methodName) : ?bool
        {
        }
        public static function getGroups(string $className, ?string $methodName = '') : array
        {
        }
        public static function getSize(string $className, ?string $methodName) : int
        {
        }
        public static function getProcessIsolationSettings(string $className, string $methodName) : bool
        {
        }
        public static function getClassProcessIsolationSettings(string $className, string $methodName) : bool
        {
        }
        public static function getPreserveGlobalStateSettings(string $className, string $methodName) : ?bool
        {
        }
        public static function getHookMethods(string $className) : array
        {
        }
        /**
         * @throws CodeCoverageException
         */
        private static function getLinesToBeCoveredOrUsed(string $className, string $methodName, string $mode) : array
        {
        }
        /**
         * Parse annotation content to use constant/class constant values
         *
         * Constants are specified using a starting '@'. For example: @ClassName::CONST_NAME
         *
         * If the constant is not found the string is used as is to ensure maximum BC.
         */
        private static function parseAnnotationContent(string $message) : string
        {
        }
        /**
         * Returns the provided data for a method.
         */
        private static function getDataFromDataProviderAnnotation(string $docComment, string $className, string $methodName) : ?iterable
        {
        }
        private static function cleanUpMultiLineAnnotation(string $docComment) : string
        {
        }
        private static function emptyHookMethodsArray() : array
        {
        }
        private static function getBooleanAnnotationSetting(string $className, ?string $methodName, string $settingName) : ?bool
        {
        }
        /**
         * @throws InvalidCoversTargetException
         */
        private static function resolveElementToReflectionObjects(string $element) : array
        {
        }
        private static function resolveReflectionObjectsToLines(array $reflectors) : array
        {
        }
        /**
         * Trims any extensions from version string that follows after
         * the <major>.<minor>[.<patch>] format
         */
        private static function sanitizeVersionNumber(string $version)
        {
        }
        private static function shouldCoversAnnotationBeUsed(array $annotations) : bool
        {
        }
    }
    final class GlobalState
    {
        /**
         * @var string[]
         */
        private const SUPER_GLOBAL_ARRAYS = ['_ENV', '_POST', '_GET', '_COOKIE', '_SERVER', '_FILES', '_REQUEST'];
        public static function getIncludedFilesAsString() : string
        {
        }
        /**
         * @param string[] $files
         */
        public static function processIncludedFilesAsString(array $files) : string
        {
        }
        public static function getIniSettingsAsString() : string
        {
        }
        public static function getConstantsAsString() : string
        {
        }
        public static function getGlobalsAsString() : string
        {
        }
        private static function exportVariable($variable) : string
        {
        }
        private static function arrayOnlyContainsScalars(array $array) : bool
        {
        }
    }
}
namespace PHPUnit\Util\TestDox {
    /**
     * Base class for printers of TestDox documentation.
     */
    abstract class ResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        /**
         * @var NamePrettifier
         */
        protected $prettifier;
        /**
         * @var string
         */
        protected $testClass = '';
        /**
         * @var int
         */
        protected $testStatus;
        /**
         * @var array
         */
        protected $tests = [];
        /**
         * @var int
         */
        protected $successful = 0;
        /**
         * @var int
         */
        protected $warned = 0;
        /**
         * @var int
         */
        protected $failed = 0;
        /**
         * @var int
         */
        protected $risky = 0;
        /**
         * @var int
         */
        protected $skipped = 0;
        /**
         * @var int
         */
        protected $incomplete = 0;
        /**
         * @var null|string
         */
        protected $currentTestClassPrettified;
        /**
         * @var null|string
         */
        protected $currentTestMethodPrettified;
        /**
         * @var array
         */
        private $groups;
        /**
         * @var array
         */
        private $excludeGroups;
        /**
         * @param resource $out
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($out = null, array $groups = [], array $excludeGroups = [])
        {
        }
        /**
         * Flush buffer and close output.
         */
        public function flush() : void
        {
        }
        /**
         * An error occurred.
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A warning occurred.
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        /**
         * A failure occurred.
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        /**
         * Incomplete test.
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Risky test.
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Skipped test.
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A testsuite started.
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A testsuite ended.
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A test started.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        /**
         * A test ended.
         */
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        protected function doEndClass() : void
        {
        }
        /**
         * Handler for 'start run' event.
         */
        protected function startRun() : void
        {
        }
        /**
         * Handler for 'start class' event.
         */
        protected function startClass(string $name) : void
        {
        }
        /**
         * Handler for 'on test' event.
         */
        protected function onTest($name, bool $success = true) : void
        {
        }
        /**
         * Handler for 'end class' event.
         */
        protected function endClass(string $name) : void
        {
        }
        /**
         * Handler for 'end run' event.
         */
        protected function endRun() : void
        {
        }
        private function isOfInterest(\PHPUnit\Framework\Test $test) : bool
        {
        }
    }
    /**
     * Prints TestDox documentation in HTML format.
     */
    final class HtmlResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
    {
        /**
         * @var string
         */
        private const PAGE_HEADER = <<<EOT
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Test Documentation</title>
        <style>
            body {
                text-rendering: optimizeLegibility;
                font-variant-ligatures: common-ligatures;
                font-kerning: normal;
                margin-left: 2em;
            }

            body > ul > li {
                font-family: Source Serif Pro, PT Sans, Trebuchet MS, Helvetica, Arial;
                font-size: 2em;
            }

            h2 {
                font-family: Tahoma, Helvetica, Arial;
                font-size: 3em;
            }

            ul {
                list-style: none;
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>
EOT;
        /**
         * @var string
         */
        private const CLASS_HEADER = <<<EOT

        <h2 id="%s">%s</h2>
        <ul>

EOT;
        /**
         * @var string
         */
        private const CLASS_FOOTER = <<<EOT
        </ul>
EOT;
        /**
         * @var string
         */
        private const PAGE_FOOTER = <<<EOT

    </body>
</html>
EOT;
        /**
         * Handler for 'start run' event.
         */
        protected function startRun() : void
        {
        }
        /**
         * Handler for 'start class' event.
         */
        protected function startClass(string $name) : void
        {
        }
        /**
         * Handler for 'on test' event.
         */
        protected function onTest($name, bool $success = true) : void
        {
        }
        /**
         * Handler for 'end class' event.
         */
        protected function endClass(string $name) : void
        {
        }
        /**
         * Handler for 'end run' event.
         */
        protected function endRun() : void
        {
        }
    }
    final class TestResult
    {
        /**
         * @var callable
         */
        private $colorize;
        /**
         * @var string
         */
        private $testClass;
        /**
         * @var string
         */
        private $testMethod;
        /**
         * @var bool
         */
        private $testSuccesful;
        /**
         * @var string
         */
        private $symbol;
        /**
         * @var string
         */
        private $additionalInformation;
        /**
         * @var bool
         */
        private $additionalInformationVerbose;
        /**
         * @var float
         */
        private $runtime;
        public function __construct(callable $colorize, string $testClass, string $testMethod)
        {
        }
        public function isTestSuccessful() : bool
        {
        }
        public function fail(string $symbol, string $additionalInformation, bool $additionalInformationVerbose = false) : void
        {
        }
        public function setRuntime(float $runtime) : void
        {
        }
        public function toString(?self $previousTestResult, $verbose = false) : string
        {
        }
        private function getClassNameHeader(?string $previousTestClass) : string
        {
        }
        private function getFormattedRuntime() : string
        {
        }
        private function getFormattedAdditionalInformation($verbose) : string
        {
        }
        private function additionalInformationPrintable(bool $verbose) : bool
        {
        }
    }
    /**
     * Prints TestDox documentation in text format to files.
     * For the CLI testdox printer please refer to \PHPUnit\TextUI\TextDoxPrinter.
     */
    class TextResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
    {
        /**
         * Handler for 'start class' event.
         */
        protected function startClass(string $name) : void
        {
        }
        /**
         * Handler for 'on test' event.
         */
        protected function onTest($name, bool $success = true) : void
        {
        }
        /**
         * Handler for 'end class' event.
         */
        protected function endClass(string $name) : void
        {
        }
    }
    class XmlResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        /**
         * @var DOMDocument
         */
        private $document;
        /**
         * @var DOMElement
         */
        private $root;
        /**
         * @var NamePrettifier
         */
        private $prettifier;
        /**
         * @var null|\Throwable
         */
        private $exception;
        /**
         * @param resource|string $out
         *
         * @throws Exception
         */
        public function __construct($out = null)
        {
        }
        /**
         * Flush buffer and close output.
         */
        public function flush() : void
        {
        }
        /**
         * An error occurred.
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A warning occurred.
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        /**
         * A failure occurred.
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        /**
         * Incomplete test.
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Risky test.
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Skipped test.
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A test suite started.
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A test suite ended.
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A test started.
         */
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        /**
         * A test ended.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
    }
    /**
     * Prettifies class and method names for use in TestDox documentation.
     */
    final class NamePrettifier
    {
        /**
         * @var array
         */
        private $strings = [];
        /**
         * Prettifies the name of a test class.
         */
        public function prettifyTestClass(string $className) : string
        {
        }
        /**
         * @throws \ReflectionException
         */
        public function prettifyTestCase(\PHPUnit\Framework\TestCase $test) : string
        {
        }
        /**
         * Prettifies the name of a test method.
         */
        public function prettifyTestMethod(string $name) : string
        {
        }
        /**
         * @throws \ReflectionException
         */
        private function mapTestMethodParameterNamesToProvidedDataValues(\PHPUnit\Framework\TestCase $test) : array
        {
        }
    }
}
namespace PHPUnit\Util {
    final class Filter
    {
        public static function getFilteredStacktrace(\Throwable $t) : string
        {
        }
        private static function frameExists(array $trace, string $file, int $line) : bool
        {
        }
    }
    final class XmlTestListRenderer
    {
        public function render(\PHPUnit\Framework\TestSuite $suite) : string
        {
        }
    }
}
namespace PHPUnit\Util\Log {
    /**
     * A TestListener that generates a logfile of the test execution using the
     * TeamCity format (for use with PhpStorm, for instance).
     */
    class TeamCity extends \PHPUnit\TextUI\ResultPrinter
    {
        /**
         * @var bool
         */
        private $isSummaryTestCountPrinted = false;
        /**
         * @var string
         */
        private $startedTestName;
        /**
         * @var false|int
         */
        private $flowId;
        public function printResult(\PHPUnit\Framework\TestResult $result) : void
        {
        }
        /**
         * An error occurred.
         *
         * @throws \InvalidArgumentException
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A warning occurred.
         *
         * @throws \InvalidArgumentException
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        /**
         * A failure occurred.
         *
         * @throws \InvalidArgumentException
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        /**
         * Incomplete test.
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Risky test.
         *
         * @throws \InvalidArgumentException
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Skipped test.
         *
         * @throws \ReflectionException
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function printIgnoredTest($testName, \Throwable $t, float $time) : void
        {
        }
        /**
         * A testsuite started.
         *
         * @throws \ReflectionException
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A testsuite ended.
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A test started.
         *
         * @throws \ReflectionException
         */
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        /**
         * A test ended.
         */
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        protected function writeProgress(string $progress) : void
        {
        }
        /**
         * @param string $eventName
         * @param array  $params
         */
        private function printEvent($eventName, $params = []) : void
        {
        }
        private static function getMessage(\Throwable $t) : string
        {
        }
        /**
         * @throws \InvalidArgumentException
         */
        private static function getDetails(\Throwable $t) : string
        {
        }
        private static function getPrimitiveValueAsString($value) : ?string
        {
        }
        private static function escapeValue(string $text) : string
        {
        }
        /**
         * @param string $className
         *
         * @throws \ReflectionException
         */
        private static function getFileName($className) : string
        {
        }
        /**
         * @param float $time microseconds
         */
        private static function toMilliseconds(float $time) : int
        {
        }
    }
    /**
     * A TestListener that generates a logfile of the test execution in XML markup.
     *
     * The XML markup used is the same as the one that is used by the JUnit Ant task.
     */
    class JUnit extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        /**
         * @var DOMDocument
         */
        protected $document;
        /**
         * @var DOMElement
         */
        protected $root;
        /**
         * @var bool
         */
        protected $reportRiskyTests = false;
        /**
         * @var bool
         */
        protected $writeDocument = true;
        /**
         * @var DOMElement[]
         */
        protected $testSuites = [];
        /**
         * @var int[]
         */
        protected $testSuiteTests = [0];
        /**
         * @var int[]
         */
        protected $testSuiteAssertions = [0];
        /**
         * @var int[]
         */
        protected $testSuiteErrors = [0];
        /**
         * @var int[]
         */
        protected $testSuiteFailures = [0];
        /**
         * @var int[]
         */
        protected $testSuiteSkipped = [0];
        /**
         * @var int[]
         */
        protected $testSuiteTimes = [0];
        /**
         * @var int
         */
        protected $testSuiteLevel = 0;
        /**
         * @var DOMElement
         */
        protected $currentTestCase;
        /**
         * Constructor.
         *
         * @param null|mixed $out
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($out = null, bool $reportRiskyTests = false)
        {
        }
        /**
         * Flush buffer and close output.
         */
        public function flush() : void
        {
        }
        /**
         * An error occurred.
         *
         * @throws \InvalidArgumentException
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A warning occurred.
         *
         * @throws \InvalidArgumentException
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        /**
         * A failure occurred.
         *
         * @throws \InvalidArgumentException
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        /**
         * Incomplete test.
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Risky test.
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Skipped test.
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * A testsuite started.
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A testsuite ended.
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * A test started.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws ReflectionException
         */
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        /**
         * A test ended.
         */
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        /**
         * Returns the XML as a string.
         */
        public function getXML() : string
        {
        }
        /**
         * Enables or disables the writing of the document
         * in flush().
         *
         * This is a "hack" needed for the integration of
         * PHPUnit with Phing.
         */
        public function setWriteDocument($flag) : void
        {
        }
        /**
         * Method which generalizes addError() and addFailure()
         *
         * @throws \InvalidArgumentException
         */
        private function doAddFault(\PHPUnit\Framework\Test $test, \Throwable $t, float $time, $type) : void
        {
        }
        private function doAddSkipped(\PHPUnit\Framework\Test $test) : void
        {
        }
    }
}
namespace PHPUnit\Util {
    /**
     * Error handler that converts PHP errors and warnings to exceptions.
     */
    final class ErrorHandler
    {
        private static $errorStack = [];
        /**
         * Returns the error stack.
         */
        public static function getErrorStack() : array
        {
        }
        public static function handleError(int $errorNumber, string $errorString, string $errorFile, int $errorLine) : bool
        {
        }
        /**
         * Registers an error handler and returns a function that will restore
         * the previous handler when invoked
         *
         * @param int $severity PHP predefined error constant
         *
         * @throws \Exception if event of specified severity is emitted
         */
        public static function handleErrorOnce($severity = \E_WARNING) : callable
        {
        }
    }
}
namespace PHPUnit\Runner {
    class NullTestResultCache implements \PHPUnit\Runner\TestResultCacheInterface
    {
        public function getState($testName) : int
        {
        }
        public function getTime($testName) : float
        {
        }
        public function load() : void
        {
        }
        public function persist() : void
        {
        }
    }
}
namespace PHPUnit\Util {
    final class XdebugFilterScriptGenerator
    {
        public function generate(array $filterData) : string
        {
        }
        private function getWhitelistItems(array $filterData) : array
        {
        }
    }
    final class TextTestListRenderer
    {
        public function render(\PHPUnit\Framework\TestSuite $suite) : string
        {
        }
    }
}
namespace PHPUnit {
    /**
     * Marker interface for PHPUnit exceptions.
     */
    interface Exception extends \Throwable
    {
    }
}
namespace PHPUnit\Framework {
    /**
     * Base class for all PHPUnit Framework exceptions.
     *
     * Ensures that exceptions thrown during a test run do not leave stray
     * references behind.
     *
     * Every Exception contains a stack trace. Each stack frame contains the 'args'
     * of the called function. The function arguments can contain references to
     * instantiated objects. The references prevent the objects from being
     * destructed (until test results are eventually printed), so memory cannot be
     * freed up.
     *
     * With enabled process isolation, test results are serialized in the child
     * process and unserialized in the parent process. The stack trace of Exceptions
     * may contain objects that cannot be serialized or unserialized (e.g., PDO
     * connections). Unserializing user-space objects from the child process into
     * the parent would break the intended encapsulation of process isolation.
     *
     * @see http://fabien.potencier.org/article/9/php-serialization-stack-traces-and-exceptions
     */
    class Exception extends \RuntimeException implements \PHPUnit\Exception
    {
        /**
         * @var array
         */
        protected $serializableTrace;
        public function __construct($message = '', $code = 0, \Exception $previous = null)
        {
        }
        /**
         * @throws \InvalidArgumentException
         */
        public function __toString() : string
        {
        }
        public function __sleep() : array
        {
        }
        /**
         * Returns the serializable trace (without 'args').
         */
        public function getSerializableTrace() : array
        {
        }
    }
    /**
     * Thrown when there is a warning.
     */
    class Warning extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
    {
        /**
         * Wrapper for getMessage() which is declared as final.
         */
        public function toString() : string
        {
        }
    }
    interface RiskyTest
    {
    }
    /**
     * Thrown when an assertion failed.
     */
    class AssertionFailedError extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
    {
        /**
         * Wrapper for getMessage() which is declared as final.
         */
        public function toString() : string
        {
        }
    }
    class RiskyTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\RiskyTest
    {
    }
    /**
     * Extension to PHPUnit\Framework\AssertionFailedError to mark the special
     * case of a test that unintentionally covers code.
     */
    class UnintentionallyCoveredCodeError extends \PHPUnit\Framework\RiskyTestError
    {
    }
    /**
     * Exception for expectations which failed their check.
     *
     * The exception contains the error message and optionally a
     * SebastianBergmann\Comparator\ComparisonFailure which is used to
     * generate diff output of the failed expectations.
     */
    class ExpectationFailedException extends \PHPUnit\Framework\AssertionFailedError
    {
        /**
         * @var ComparisonFailure
         */
        protected $comparisonFailure;
        public function __construct(string $message, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null, \Exception $previous = null)
        {
        }
        public function getComparisonFailure() : ?\SebastianBergmann\Comparator\ComparisonFailure
        {
        }
    }
    /**
     * A TestResult collects the results of executing a test case.
     */
    class TestResult implements \Countable
    {
        /**
         * @var array
         */
        protected $passed = [];
        /**
         * @var TestFailure[]
         */
        protected $errors = [];
        /**
         * @var TestFailure[]
         */
        protected $failures = [];
        /**
         * @var TestFailure[]
         */
        protected $warnings = [];
        /**
         * @var TestFailure[]
         */
        protected $notImplemented = [];
        /**
         * @var TestFailure[]
         */
        protected $risky = [];
        /**
         * @var TestFailure[]
         */
        protected $skipped = [];
        /**
         * @var TestListener[]
         */
        protected $listeners = [];
        /**
         * @var int
         */
        protected $runTests = 0;
        /**
         * @var float
         */
        protected $time = 0;
        /**
         * @var TestSuite
         */
        protected $topTestSuite;
        /**
         * Code Coverage information.
         *
         * @var CodeCoverage
         */
        protected $codeCoverage;
        /**
         * @var bool
         */
        protected $convertErrorsToExceptions = true;
        /**
         * @var bool
         */
        protected $stop = false;
        /**
         * @var bool
         */
        protected $stopOnError = false;
        /**
         * @var bool
         */
        protected $stopOnFailure = false;
        /**
         * @var bool
         */
        protected $stopOnWarning = false;
        /**
         * @var bool
         */
        protected $beStrictAboutTestsThatDoNotTestAnything = true;
        /**
         * @var bool
         */
        protected $beStrictAboutOutputDuringTests = false;
        /**
         * @var bool
         */
        protected $beStrictAboutTodoAnnotatedTests = false;
        /**
         * @var bool
         */
        protected $beStrictAboutResourceUsageDuringSmallTests = false;
        /**
         * @var bool
         */
        protected $enforceTimeLimit = false;
        /**
         * @var int
         */
        protected $timeoutForSmallTests = 1;
        /**
         * @var int
         */
        protected $timeoutForMediumTests = 10;
        /**
         * @var int
         */
        protected $timeoutForLargeTests = 60;
        /**
         * @var bool
         */
        protected $stopOnRisky = false;
        /**
         * @var bool
         */
        protected $stopOnIncomplete = false;
        /**
         * @var bool
         */
        protected $stopOnSkipped = false;
        /**
         * @var bool
         */
        protected $lastTestFailed = false;
        /**
         * @var int
         */
        private $defaultTimeLimit = 0;
        /**
         * @var bool
         */
        private $stopOnDefect = false;
        /**
         * @var bool
         */
        private $registerMockObjectsFromTestArgumentsRecursively = false;
        public static function isAnyCoverageRequired(\PHPUnit\Framework\TestCase $test)
        {
        }
        /**
         * Registers a TestListener.
         */
        public function addListener(\PHPUnit\Framework\TestListener $listener) : void
        {
        }
        /**
         * Unregisters a TestListener.
         */
        public function removeListener(\PHPUnit\Framework\TestListener $listener) : void
        {
        }
        /**
         * Flushes all flushable TestListeners.
         */
        public function flushListeners() : void
        {
        }
        /**
         * Adds an error to the list of errors.
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        /**
         * Adds a warning to the list of warnings.
         * The passed in exception caused the warning.
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        /**
         * Adds a failure to the list of failures.
         * The passed in exception caused the failure.
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        /**
         * Informs the result that a test suite will be started.
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * Informs the result that a test suite was completed.
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        /**
         * Informs the result that a test will be started.
         */
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        /**
         * Informs the result that a test was completed.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        /**
         * Returns true if no risky test occurred.
         */
        public function allHarmless() : bool
        {
        }
        /**
         * Gets the number of risky tests.
         */
        public function riskyCount() : int
        {
        }
        /**
         * Returns true if no incomplete test occurred.
         */
        public function allCompletelyImplemented() : bool
        {
        }
        /**
         * Gets the number of incomplete tests.
         */
        public function notImplementedCount() : int
        {
        }
        /**
         * Returns an array of TestFailure objects for the risky tests
         *
         * @return TestFailure[]
         */
        public function risky() : array
        {
        }
        /**
         * Returns an array of TestFailure objects for the incomplete tests
         *
         * @return TestFailure[]
         */
        public function notImplemented() : array
        {
        }
        /**
         * Returns true if no test has been skipped.
         */
        public function noneSkipped() : bool
        {
        }
        /**
         * Gets the number of skipped tests.
         */
        public function skippedCount() : int
        {
        }
        /**
         * Returns an array of TestFailure objects for the skipped tests
         *
         * @return TestFailure[]
         */
        public function skipped() : array
        {
        }
        /**
         * Gets the number of detected errors.
         */
        public function errorCount() : int
        {
        }
        /**
         * Returns an array of TestFailure objects for the errors
         *
         * @return TestFailure[]
         */
        public function errors() : array
        {
        }
        /**
         * Gets the number of detected failures.
         */
        public function failureCount() : int
        {
        }
        /**
         * Returns an array of TestFailure objects for the failures
         *
         * @return TestFailure[]
         */
        public function failures() : array
        {
        }
        /**
         * Gets the number of detected warnings.
         */
        public function warningCount() : int
        {
        }
        /**
         * Returns an array of TestFailure objects for the warnings
         *
         * @return TestFailure[]
         */
        public function warnings() : array
        {
        }
        /**
         * Returns the names of the tests that have passed.
         */
        public function passed() : array
        {
        }
        /**
         * Returns the (top) test suite.
         */
        public function topTestSuite() : \PHPUnit\Framework\TestSuite
        {
        }
        /**
         * Returns whether code coverage information should be collected.
         */
        public function getCollectCodeCoverageInformation() : bool
        {
        }
        /**
         * Runs a TestCase.
         *
         * @throws CodeCoverageException
         * @throws OriginalCoveredCodeNotExecutedException
         * @throws OriginalMissingCoversAnnotationException
         * @throws UnintentionallyCoveredCodeException
         * @throws \ReflectionException
         * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
         * @throws \SebastianBergmann\CodeCoverage\RuntimeException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function run(\PHPUnit\Framework\Test $test) : void
        {
        }
        /**
         * Gets the number of run tests.
         */
        public function count() : int
        {
        }
        /**
         * Checks whether the test run should stop.
         */
        public function shouldStop() : bool
        {
        }
        /**
         * Marks that the test run should stop.
         */
        public function stop() : void
        {
        }
        /**
         * Returns the code coverage object.
         */
        public function getCodeCoverage() : ?\SebastianBergmann\CodeCoverage\CodeCoverage
        {
        }
        /**
         * Sets the code coverage object.
         */
        public function setCodeCoverage(\SebastianBergmann\CodeCoverage\CodeCoverage $codeCoverage) : void
        {
        }
        /**
         * Enables or disables the error-to-exception conversion.
         */
        public function convertErrorsToExceptions(bool $flag) : void
        {
        }
        /**
         * Returns the error-to-exception conversion setting.
         */
        public function getConvertErrorsToExceptions() : bool
        {
        }
        /**
         * Enables or disables the stopping when an error occurs.
         */
        public function stopOnError(bool $flag) : void
        {
        }
        /**
         * Enables or disables the stopping when a failure occurs.
         */
        public function stopOnFailure(bool $flag) : void
        {
        }
        /**
         * Enables or disables the stopping when a warning occurs.
         */
        public function stopOnWarning(bool $flag) : void
        {
        }
        public function beStrictAboutTestsThatDoNotTestAnything(bool $flag) : void
        {
        }
        public function isStrictAboutTestsThatDoNotTestAnything() : bool
        {
        }
        public function beStrictAboutOutputDuringTests(bool $flag) : void
        {
        }
        public function isStrictAboutOutputDuringTests() : bool
        {
        }
        public function beStrictAboutResourceUsageDuringSmallTests(bool $flag) : void
        {
        }
        public function isStrictAboutResourceUsageDuringSmallTests() : bool
        {
        }
        public function enforceTimeLimit(bool $flag) : void
        {
        }
        public function enforcesTimeLimit() : bool
        {
        }
        public function beStrictAboutTodoAnnotatedTests(bool $flag) : void
        {
        }
        public function isStrictAboutTodoAnnotatedTests() : bool
        {
        }
        /**
         * Enables or disables the stopping for risky tests.
         */
        public function stopOnRisky(bool $flag) : void
        {
        }
        /**
         * Enables or disables the stopping for incomplete tests.
         */
        public function stopOnIncomplete(bool $flag) : void
        {
        }
        /**
         * Enables or disables the stopping for skipped tests.
         */
        public function stopOnSkipped(bool $flag) : void
        {
        }
        /**
         * Enables or disables the stopping for defects: error, failure, warning
         */
        public function stopOnDefect(bool $flag) : void
        {
        }
        /**
         * Returns the time spent running the tests.
         */
        public function time() : float
        {
        }
        /**
         * Returns whether the entire test was successful or not.
         */
        public function wasSuccessful() : bool
        {
        }
        public function wasSuccessfulIgnoringWarnings() : bool
        {
        }
        /**
         * Sets the default timeout for tests
         */
        public function setDefaultTimeLimit(int $timeout) : void
        {
        }
        /**
         * Sets the timeout for small tests.
         */
        public function setTimeoutForSmallTests(int $timeout) : void
        {
        }
        /**
         * Sets the timeout for medium tests.
         */
        public function setTimeoutForMediumTests(int $timeout) : void
        {
        }
        /**
         * Sets the timeout for large tests.
         */
        public function setTimeoutForLargeTests(int $timeout) : void
        {
        }
        /**
         * Returns the set timeout for large tests.
         */
        public function getTimeoutForLargeTests() : int
        {
        }
        public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void
        {
        }
    }
    interface SkippedTest
    {
    }
    class SkippedTestSuiteError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
    {
    }
    /**
     * Iterator for test suites.
     */
    final class TestSuiteIterator implements \RecursiveIterator
    {
        /**
         * @var int
         */
        private $position = 0;
        /**
         * @var Test[]
         */
        private $tests;
        public function __construct(\PHPUnit\Framework\TestSuite $testSuite)
        {
        }
        /**
         * Rewinds the Iterator to the first element.
         */
        public function rewind() : void
        {
        }
        /**
         * Checks if there is a current element after calls to rewind() or next().
         */
        public function valid() : bool
        {
        }
        /**
         * Returns the key of the current element.
         */
        public function key() : int
        {
        }
        /**
         * Returns the current element.
         */
        public function current() : ?\PHPUnit\Framework\Test
        {
        }
        /**
         * Moves forward to next element.
         */
        public function next() : void
        {
        }
        /**
         * Returns the sub iterator for the current element.
         *
         * @throws \UnexpectedValueException if the current element is no TestSuite
         */
        public function getChildren() : self
        {
        }
        /**
         * Checks whether the current element has children.
         */
        public function hasChildren() : bool
        {
        }
    }
    /**
     * A TestSuite is a composite of Tests. It runs a collection of test cases.
     */
    class TestSuite implements \IteratorAggregate, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
    {
        /**
         * Enable or disable the backup and restoration of the $GLOBALS array.
         *
         * @var bool
         */
        protected $backupGlobals;
        /**
         * Enable or disable the backup and restoration of static attributes.
         *
         * @var bool
         */
        protected $backupStaticAttributes;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * The name of the test suite.
         *
         * @var string
         */
        protected $name = '';
        /**
         * The test groups of the test suite.
         *
         * @var array
         */
        protected $groups = [];
        /**
         * The tests in the test suite.
         *
         * @var Test[]
         */
        protected $tests = [];
        /**
         * The number of tests in the test suite.
         *
         * @var int
         */
        protected $numTests = -1;
        /**
         * @var bool
         */
        protected $testCase = false;
        /**
         * @var array
         */
        protected $foundClasses = [];
        /**
         * Last count of tests in this suite.
         *
         * @var null|int
         */
        private $cachedNumTests;
        /**
         * @var bool
         */
        private $beStrictAboutChangesToGlobalState;
        /**
         * @var Factory
         */
        private $iteratorFilter;
        /**
         * @var string[]
         */
        private $declaredClasses;
        /**
         * @param string $name
         *
         * @throws Exception
         */
        public static function createTest(\ReflectionClass $theClass, $name) : \PHPUnit\Framework\Test
        {
        }
        public static function isTestMethod(\ReflectionMethod $method) : bool
        {
        }
        /**
         * Constructs a new TestSuite:
         *
         *   - PHPUnit\Framework\TestSuite() constructs an empty TestSuite.
         *
         *   - PHPUnit\Framework\TestSuite(ReflectionClass) constructs a
         *     TestSuite from the given class.
         *
         *   - PHPUnit\Framework\TestSuite(ReflectionClass, String)
         *     constructs a TestSuite from the given class with the given
         *     name.
         *
         *   - PHPUnit\Framework\TestSuite(String) either constructs a
         *     TestSuite from the given class (if the passed string is the
         *     name of an existing class) or constructs an empty TestSuite
         *     with the given name.
         *
         * @param string $name
         *
         * @throws Exception
         */
        public function __construct($theClass = '', $name = '')
        {
        }
        /**
         * Template Method that is called before the tests
         * of this test suite are run.
         */
        protected function setUp() : void
        {
        }
        /**
         * Template Method that is called after the tests
         * of this test suite have finished running.
         */
        protected function tearDown() : void
        {
        }
        /**
         * Returns a string representation of the test suite.
         */
        public function toString() : string
        {
        }
        /**
         * Adds a test to the suite.
         *
         * @param array $groups
         */
        public function addTest(\PHPUnit\Framework\Test $test, $groups = []) : void
        {
        }
        /**
         * Adds the tests from the given class to the suite.
         *
         * @throws Exception
         */
        public function addTestSuite($testClass) : void
        {
        }
        /**
         * Wraps both <code>addTest()</code> and <code>addTestSuite</code>
         * as well as the separate import statements for the user's convenience.
         *
         * If the named file cannot be read or there are no new tests that can be
         * added, a <code>PHPUnit\Framework\WarningTestCase</code> will be created instead,
         * leaving the current test run untouched.
         *
         * @throws Exception
         */
        public function addTestFile(string $filename) : void
        {
        }
        /**
         * Wrapper for addTestFile() that adds multiple test files.
         *
         * @param array|Iterator $fileNames
         *
         * @throws Exception
         */
        public function addTestFiles($fileNames) : void
        {
        }
        /**
         * Counts the number of test cases that will be run by this test.
         *
         * @param bool $preferCache indicates if cache is preferred
         */
        public function count($preferCache = false) : int
        {
        }
        /**
         * Returns the name of the suite.
         */
        public function getName() : string
        {
        }
        /**
         * Returns the test groups of the suite.
         */
        public function getGroups() : array
        {
        }
        public function getGroupDetails()
        {
        }
        /**
         * Set tests groups of the test case
         */
        public function setGroupDetails(array $groups) : void
        {
        }
        /**
         * Runs the tests and collects their result in a TestResult.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
        {
        }
        public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void
        {
        }
        public function setName(string $name) : void
        {
        }
        /**
         * Returns the test at the given index.
         *
         * @return false|Test
         */
        public function testAt(int $index)
        {
        }
        /**
         * Returns the tests as an enumeration.
         *
         * @return Test[]
         */
        public function tests() : array
        {
        }
        /**
         * Set tests of the test suite
         *
         * @param Test[] $tests
         */
        public function setTests(array $tests) : void
        {
        }
        /**
         * Mark the test suite as skipped.
         *
         * @param string $message
         *
         * @throws SkippedTestSuiteError
         */
        public function markTestSuiteSkipped($message = '') : void
        {
        }
        /**
         * @param bool $beStrictAboutChangesToGlobalState
         */
        public function setBeStrictAboutChangesToGlobalState($beStrictAboutChangesToGlobalState) : void
        {
        }
        /**
         * @param bool $backupGlobals
         */
        public function setBackupGlobals($backupGlobals) : void
        {
        }
        /**
         * @param bool $backupStaticAttributes
         */
        public function setBackupStaticAttributes($backupStaticAttributes) : void
        {
        }
        /**
         * Returns an iterator for this test suite.
         */
        public function getIterator() : \Iterator
        {
        }
        public function injectFilter(\PHPUnit\Runner\Filter\Factory $filter) : void
        {
        }
        /**
         * Creates a default TestResult object.
         */
        protected function createResult() : \PHPUnit\Framework\TestResult
        {
        }
        /**
         * @throws Exception
         */
        protected function addTestMethod(\ReflectionClass $class, \ReflectionMethod $method) : void
        {
        }
        /**
         * @param string $message
         */
        protected static function warning($message) : \PHPUnit\Framework\WarningTestCase
        {
        }
        /**
         * @param string $class
         * @param string $methodName
         * @param string $message
         */
        protected static function skipTest($class, $methodName, $message) : \PHPUnit\Framework\SkippedTestCase
        {
        }
        /**
         * @param string $class
         * @param string $methodName
         * @param string $message
         */
        protected static function incompleteTest($class, $methodName, $message) : \PHPUnit\Framework\IncompleteTestCase
        {
        }
    }
    class OutputError extends \PHPUnit\Framework\AssertionFailedError
    {
    }
    /**
     * A marker interface for marking any exception/error as result of an unit
     * test as incomplete implementation or currently not implemented.
     */
    interface IncompleteTest
    {
    }
    class IncompleteTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\IncompleteTest
    {
    }
    final class UnexpectedValueException extends \PHPUnit\Framework\Exception
    {
    }
    class SkippedTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
    {
    }
    /**
     * Creates a synthetic failed assertion.
     */
    class SyntheticError extends \PHPUnit\Framework\AssertionFailedError
    {
        /**
         * The synthetic file.
         *
         * @var string
         */
        protected $syntheticFile = '';
        /**
         * The synthetic line number.
         *
         * @var int
         */
        protected $syntheticLine = 0;
        /**
         * The synthetic trace.
         *
         * @var array
         */
        protected $syntheticTrace = [];
        public function __construct(string $message, int $code, string $file, int $line, array $trace)
        {
        }
        public function getSyntheticFile() : string
        {
        }
        public function getSyntheticLine() : int
        {
        }
        public function getSyntheticTrace() : array
        {
        }
    }
    class CodeCoverageException extends \PHPUnit\Framework\Exception
    {
    }
    /**
     * Wraps Exceptions thrown by code under test.
     *
     * Re-instantiates Exceptions thrown by user-space code to retain their original
     * class names, properties, and stack traces (but without arguments).
     *
     * Unlike PHPUnit\Framework_\Exception, the complete stack of previous Exceptions
     * is processed.
     */
    class ExceptionWrapper extends \PHPUnit\Framework\Exception
    {
        /**
         * @var string
         */
        protected $className;
        /**
         * @var null|ExceptionWrapper
         */
        protected $previous;
        public function __construct(\Throwable $t)
        {
        }
        /**
         * @throws \InvalidArgumentException
         */
        public function __toString() : string
        {
        }
        public function getClassName() : string
        {
        }
        public function getPreviousWrapped() : ?self
        {
        }
        public function setClassName(string $className) : void
        {
        }
        public function setOriginalException(\Throwable $t) : void
        {
        }
        public function getOriginalException() : ?\Throwable
        {
        }
        /**
         * Method to contain static originalException to exclude it from stacktrace to prevent the stacktrace contents,
         * which can be quite big, from being garbage-collected, thus blocking memory until shutdown.
         * Approach works both for var_dump() and var_export() and print_r()
         */
        private function originalException(\Throwable $exceptionToStore = null) : ?\Throwable
        {
        }
    }
    class CoveredCodeNotExecutedException extends \PHPUnit\Framework\RiskyTestError
    {
    }
    /**
     * @internal This class is not covered by the backward compatibility promise for PHPUnit
     */
    final class InvalidParameterGroupException extends \PHPUnit\Framework\Exception
    {
    }
    class DataProviderTestSuite extends \PHPUnit\Framework\TestSuite
    {
        /**
         * @var string[]
         */
        private $dependencies = [];
        /**
         * @param string[] $dependencies
         */
        public function setDependencies(array $dependencies) : void
        {
        }
        public function getDependencies() : array
        {
        }
        public function hasDependencies() : bool
        {
        }
    }
}
namespace PHPUnit\Framework\MockObject {
    /**
     * Interface for invocations.
     */
    interface Invocation
    {
        /**
         * @return mixed mocked return value
         */
        public function generateReturnValue();
        public function getClassName() : string;
        public function getMethodName() : string;
        public function getParameters() : array;
        public function getReturnType() : string;
        public function isReturnTypeNullable() : bool;
    }
}
namespace PHPUnit\Framework\MockObject\Invocation {
    /**
     * Represents a static invocation.
     */
    class StaticInvocation implements \PHPUnit\Framework\MockObject\Invocation, \PHPUnit\Framework\SelfDescribing
    {
        /**
         * @var array
         */
        private static $uncloneableExtensions = ['mysqli' => true, 'SQLite' => true, 'sqlite3' => true, 'tidy' => true, 'xmlwriter' => true, 'xsl' => true];
        /**
         * @var array
         */
        private static $uncloneableClasses = ['Closure', 'COMPersistHelper', 'IteratorIterator', 'RecursiveIteratorIterator', 'SplFileObject', 'PDORow', 'ZipArchive'];
        /**
         * @var string
         */
        private $className;
        /**
         * @var string
         */
        private $methodName;
        /**
         * @var array
         */
        private $parameters;
        /**
         * @var string
         */
        private $returnType;
        /**
         * @var bool
         */
        private $isReturnTypeNullable = false;
        /**
         * @var bool
         */
        private $proxiedCall = false;
        /**
         * @param string $className
         * @param string $methodName
         * @param string $returnType
         * @param bool   $cloneObjects
         */
        public function __construct($className, $methodName, array $parameters, $returnType, $cloneObjects = false)
        {
        }
        public function getClassName() : string
        {
        }
        public function getMethodName() : string
        {
        }
        public function getParameters() : array
        {
        }
        public function getReturnType() : string
        {
        }
        public function isReturnTypeNullable() : bool
        {
        }
        /**
         * @throws \ReflectionException
         * @throws \PHPUnit\Framework\MockObject\RuntimeException
         * @throws \PHPUnit\Framework\Exception
         *
         * @return mixed Mocked return value
         */
        public function generateReturnValue()
        {
        }
        public function setProxiedCall() : void
        {
        }
        public function toString() : string
        {
        }
        /**
         * @param object $original
         *
         * @return object
         */
        private function cloneObject($original)
        {
        }
    }
    /**
     * Represents a non-static invocation.
     */
    class ObjectInvocation extends \PHPUnit\Framework\MockObject\Invocation\StaticInvocation
    {
        /**
         * @var object
         */
        private $object;
        /**
         * @param string $className
         * @param string $methodName
         * @param string $returnType
         * @param object $object
         * @param bool   $cloneObjects
         */
        public function __construct($className, $methodName, array $parameters, $returnType, $object, $cloneObjects = false)
        {
        }
        public function getObject()
        {
        }
    }
}
namespace {
    /**
     * Interface for all mock objects which are generated by
     * MockBuilder.
     *
     * @method InvocationMocker method($constraint)
     *
     * @deprecated Use PHPUnit\Framework\MockObject\MockObject instead
     */
    interface PHPUnit_Framework_MockObject_MockObject
    {
        /**
         * @return InvocationMocker
         */
        public function __phpunit_setOriginalObject($originalObject);
        /**
         * @return InvocationMocker
         */
        public function __phpunit_getInvocationMocker();
        /**
         * Verifies that the current expectation is valid. If everything is OK the
         * code should just return, if not it must throw an exception.
         *
         * @throws ExpectationFailedException
         */
        public function __phpunit_verify(bool $unsetInvocationMocker = \true);
        /**
         * @return bool
         */
        public function __phpunit_hasMatchers();
        public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration);
        /**
         * Registers a new expectation in the mock object and returns the match
         * object which can be infused with further details.
         *
         * @return InvocationMocker
         */
        public function expects(\PHPUnit\Framework\MockObject\Matcher\Invocation $matcher);
    }
}
namespace PHPUnit\Framework\MockObject {
    /**
     * Interface for classes which must verify a given expectation.
     */
    interface Verifiable
    {
        /**
         * Verifies that the current expectation is valid. If everything is OK the
         * code should just return, if not it must throw an exception.
         *
         * @throws ExpectationFailedException
         */
        public function verify();
    }
    /**
     * Interface for classes which can be invoked.
     *
     * The invocation will be taken from a mock object and passed to an object
     * of this class.
     */
    interface Invokable extends \PHPUnit\Framework\MockObject\Verifiable
    {
        /**
         * Invokes the invocation object $invocation so that it can be checked for
         * expectations or matched against stubs.
         *
         * @param Invocation $invocation The invocation object passed from mock object
         *
         * @return object
         */
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation);
        /**
         * Checks if the invocation matches.
         *
         * @param Invocation $invocation The invocation object passed from mock object
         *
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation);
    }
}
namespace PHPUnit\Framework\MockObject\Stub {
    /**
     * Stubs a method by returning a user-defined value.
     */
    interface MatcherCollection
    {
        /**
         * Adds a new matcher to the collection which can be used as an expectation
         * or a stub.
         *
         * @param Invocation $matcher Matcher for invocations to mock objects
         */
        public function addMatcher(\PHPUnit\Framework\MockObject\Matcher\Invocation $matcher);
    }
}
namespace PHPUnit\Framework\MockObject\Builder {
    /**
     * Interface for builders which can register builders with a given identification.
     *
     * This interface relates to Identity.
     */
    interface NamespaceMatch
    {
        /**
         * Looks up the match builder with identification $id and returns it.
         *
         * @param string $id The identification of the match builder
         *
         * @return Match
         */
        public function lookupId($id);
        /**
         * Registers the match builder $builder with the identification $id. The
         * builder can later be looked up using lookupId() to figure out if it
         * has been invoked.
         *
         * @param string $id      The identification of the match builder
         * @param Match  $builder The builder which is being registered
         */
        public function registerId($id, \PHPUnit\Framework\MockObject\Builder\Match $builder);
    }
}
namespace PHPUnit\Framework\MockObject {
    /**
     * Mocker for invocations which are sent from
     * MockObject objects.
     *
     * Keeps track of all expectations and stubs as well as registering
     * identifications for builders.
     */
    class InvocationMocker implements \PHPUnit\Framework\MockObject\Invokable, \PHPUnit\Framework\MockObject\Stub\MatcherCollection, \PHPUnit\Framework\MockObject\Builder\NamespaceMatch
    {
        /**
         * @var MatcherInvocation[]
         */
        private $matchers = [];
        /**
         * @var Match[]
         */
        private $builderMap = [];
        /**
         * @var string[]
         */
        private $configurableMethods;
        /**
         * @var bool
         */
        private $returnValueGeneration;
        public function __construct(array $configurableMethods, bool $returnValueGeneration)
        {
        }
        public function addMatcher(\PHPUnit\Framework\MockObject\Matcher\Invocation $matcher) : void
        {
        }
        public function hasMatchers()
        {
        }
        /**
         * @return null|bool
         */
        public function lookupId($id)
        {
        }
        /**
         * @throws RuntimeException
         */
        public function registerId($id, \PHPUnit\Framework\MockObject\Builder\Match $builder) : void
        {
        }
        /**
         * @return BuilderInvocationMocker
         */
        public function expects(\PHPUnit\Framework\MockObject\Matcher\Invocation $matcher)
        {
        }
        /**
         * @throws Exception
         */
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        /**
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         *
         * @return bool
         */
        public function verify()
        {
        }
    }
    /**
     * Implementation of the Builder pattern for Mock objects.
     */
    class MockBuilder
    {
        /**
         * @var TestCase
         */
        private $testCase;
        /**
         * @var string
         */
        private $type;
        /**
         * @var array
         */
        private $methods = [];
        /**
         * @var array
         */
        private $methodsExcept = [];
        /**
         * @var string
         */
        private $mockClassName = '';
        /**
         * @var array
         */
        private $constructorArgs = [];
        /**
         * @var bool
         */
        private $originalConstructor = true;
        /**
         * @var bool
         */
        private $originalClone = true;
        /**
         * @var bool
         */
        private $autoload = true;
        /**
         * @var bool
         */
        private $cloneArguments = false;
        /**
         * @var bool
         */
        private $callOriginalMethods = false;
        /**
         * @var object
         */
        private $proxyTarget;
        /**
         * @var bool
         */
        private $allowMockingUnknownTypes = true;
        /**
         * @var bool
         */
        private $returnValueGeneration = true;
        /**
         * @var Generator
         */
        private $generator;
        /**
         * @param array|string $type
         */
        public function __construct(\PHPUnit\Framework\TestCase $testCase, $type)
        {
        }
        /**
         * Creates a mock object using a fluent interface.
         *
         * @return MockObject
         */
        public function getMock()
        {
        }
        /**
         * Creates a mock object for an abstract class using a fluent interface.
         *
         * @return MockObject
         */
        public function getMockForAbstractClass()
        {
        }
        /**
         * Creates a mock object for a trait using a fluent interface.
         *
         * @return MockObject
         */
        public function getMockForTrait()
        {
        }
        /**
         * Specifies the subset of methods to mock. Default is to mock none of them.
         *
         * @return MockBuilder
         */
        public function setMethods(array $methods = null)
        {
        }
        /**
         * Specifies the subset of methods to not mock. Default is to mock all of them.
         *
         * @return MockBuilder
         */
        public function setMethodsExcept(array $methods = [])
        {
        }
        /**
         * Specifies the arguments for the constructor.
         *
         * @return MockBuilder
         */
        public function setConstructorArgs(array $args)
        {
        }
        /**
         * Specifies the name for the mock class.
         *
         * @param string $name
         *
         * @return MockBuilder
         */
        public function setMockClassName($name)
        {
        }
        /**
         * Disables the invocation of the original constructor.
         *
         * @return MockBuilder
         */
        public function disableOriginalConstructor()
        {
        }
        /**
         * Enables the invocation of the original constructor.
         *
         * @return MockBuilder
         */
        public function enableOriginalConstructor()
        {
        }
        /**
         * Disables the invocation of the original clone constructor.
         *
         * @return MockBuilder
         */
        public function disableOriginalClone()
        {
        }
        /**
         * Enables the invocation of the original clone constructor.
         *
         * @return MockBuilder
         */
        public function enableOriginalClone()
        {
        }
        /**
         * Disables the use of class autoloading while creating the mock object.
         *
         * @return MockBuilder
         */
        public function disableAutoload()
        {
        }
        /**
         * Enables the use of class autoloading while creating the mock object.
         *
         * @return MockBuilder
         */
        public function enableAutoload()
        {
        }
        /**
         * Disables the cloning of arguments passed to mocked methods.
         *
         * @return MockBuilder
         */
        public function disableArgumentCloning()
        {
        }
        /**
         * Enables the cloning of arguments passed to mocked methods.
         *
         * @return MockBuilder
         */
        public function enableArgumentCloning()
        {
        }
        /**
         * Enables the invocation of the original methods.
         *
         * @return MockBuilder
         */
        public function enableProxyingToOriginalMethods()
        {
        }
        /**
         * Disables the invocation of the original methods.
         *
         * @return MockBuilder
         */
        public function disableProxyingToOriginalMethods()
        {
        }
        /**
         * Sets the proxy target.
         *
         * @param object $object
         *
         * @return MockBuilder
         */
        public function setProxyTarget($object)
        {
        }
        /**
         * @return MockBuilder
         */
        public function allowMockingUnknownTypes()
        {
        }
        /**
         * @return MockBuilder
         */
        public function disallowMockingUnknownTypes()
        {
        }
        /**
         * @return MockBuilder
         */
        public function enableAutoReturnValueGeneration()
        {
        }
        /**
         * @return MockBuilder
         */
        public function disableAutoReturnValueGeneration()
        {
        }
    }
    final class MockMethodSet
    {
        /**
         * @var MockMethod[]
         */
        private $methods = [];
        public function addMethods(\PHPUnit\Framework\MockObject\MockMethod ...$methods) : void
        {
        }
        public function asArray() : array
        {
        }
        public function hasMethod(string $methodName) : bool
        {
        }
    }
}
namespace PHPUnit\Framework\MockObject\Matcher {
    /**
     * Interface for classes which matches an invocation based on its
     * method name, argument, order or call count.
     */
    interface Invocation extends \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\MockObject\Verifiable
    {
        /**
         * Registers the invocation $invocation in the object as being invoked.
         * This will only occur after matches() returns true which means the
         * current invocation is the correct one.
         *
         * The matcher can store information from the invocation which can later
         * be checked in verify(), or it can check the values directly and throw
         * and exception if an expectation is not met.
         *
         * If the matcher is a stub it will also have a return value.
         *
         * @param BaseInvocation $invocation Object containing information on a mocked or stubbed method which was invoked
         */
        public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation);
        /**
         * Checks if the invocation $invocation matches the current rules. If it does
         * the matcher will get the invoked() method called which should check if an
         * expectation is met.
         *
         * @param BaseInvocation $invocation Object containing information on a mocked or stubbed method which was invoked
         *
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation);
    }
    /**
     * Invocation matcher which does not care about previous state from earlier
     * invocations.
     *
     * This abstract class can be implemented by matchers which does not care about
     * state but only the current run-time value of the invocation itself.
     */
    abstract class StatelessInvocation implements \PHPUnit\Framework\MockObject\Matcher\Invocation
    {
        /**
         * Registers the invocation $invocation in the object as being invoked.
         * This will only occur after matches() returns true which means the
         * current invocation is the correct one.
         *
         * The matcher can store information from the invocation which can later
         * be checked in verify(), or it can check the values directly and throw
         * and exception if an expectation is not met.
         *
         * If the matcher is a stub it will also have a return value.
         *
         * @param BaseInvocation $invocation Object containing information on a mocked or stubbed method which was invoked
         */
        public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        /**
         * Checks if the invocation $invocation matches the current rules. If it does
         * the matcher will get the invoked() method called which should check if an
         * expectation is met.
         *
         * @return bool
         */
        public function verify()
        {
        }
    }
    /**
     * Invocation matcher which looks for a specific method name in the invocations.
     *
     * Checks the method name all incoming invocations, the name is checked against
     * the defined constraint $constraint. If the constraint is met it will return
     * true in matches().
     */
    class MethodName extends \PHPUnit\Framework\MockObject\Matcher\StatelessInvocation
    {
        /**
         * @var Constraint
         */
        private $constraint;
        /**
         * @param  Constraint|string
         *
         * @throws Constraint
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($constraint)
        {
        }
        public function toString() : string
        {
        }
        /**
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
    }
    /**
     * Invocation matcher which looks for sets of specific parameters in the invocations.
     *
     * Checks the parameters of the incoming invocations, the parameter list is
     * checked against the defined constraints in $parameters. If the constraint
     * is met it will return true in matches().
     *
     * It takes a list of match groups and and increases a call index after each invocation.
     * So the first invocation uses the first group of constraints, the second the next and so on.
     */
    class ConsecutiveParameters extends \PHPUnit\Framework\MockObject\Matcher\StatelessInvocation
    {
        /**
         * @var array
         */
        private $parameterGroups = [];
        /**
         * @var array
         */
        private $invocations = [];
        /**
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct(array $parameterGroups)
        {
        }
        public function toString() : string
        {
        }
        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         *
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function verify() : void
        {
        }
        /**
         * Verify a single invocation
         *
         * @param int $callIndex
         *
         * @throws ExpectationFailedException
         */
        private function verifyInvocation(\PHPUnit\Framework\MockObject\Invocation $invocation, $callIndex) : void
        {
        }
    }
    class DeferredError extends \PHPUnit\Framework\MockObject\Matcher\StatelessInvocation
    {
        /**
         * @var \Throwable
         */
        private $exception;
        public function __construct(\Throwable $exception)
        {
        }
        public function verify() : void
        {
        }
        public function toString() : string
        {
        }
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
        {
        }
    }
    /**
     * Records invocations and provides convenience methods for checking them later
     * on.
     * This abstract class can be implemented by matchers which needs to check the
     * number of times an invocation has occurred.
     */
    abstract class InvokedRecorder implements \PHPUnit\Framework\MockObject\Matcher\Invocation
    {
        /**
         * @var BaseInvocation[]
         */
        private $invocations = [];
        /**
         * @return int
         */
        public function getInvocationCount()
        {
        }
        /**
         * @return BaseInvocation[]
         */
        public function getInvocations()
        {
        }
        /**
         * @return bool
         */
        public function hasBeenInvoked()
        {
        }
        public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
        {
        }
        /**
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
    }
    /**
     * Invocation matcher which checks if a method has been invoked zero or more
     * times. This matcher will always match.
     */
    class AnyInvokedCount extends \PHPUnit\Framework\MockObject\Matcher\InvokedRecorder
    {
        public function toString() : string
        {
        }
        public function verify() : void
        {
        }
    }
    /**
     * Invocation matcher which checks if a method has been invoked at least one
     * time.
     *
     * If the number of invocations is 0 it will throw an exception in verify.
     */
    class InvokedAtLeastOnce extends \PHPUnit\Framework\MockObject\Matcher\InvokedRecorder
    {
        public function toString() : string
        {
        }
        /**
         * Verifies that the current expectation is valid. If everything is OK the
         * code should just return, if not it must throw an exception.
         *
         * @throws ExpectationFailedException
         */
        public function verify() : void
        {
        }
    }
    /**
     * Invocation matcher which allows any parameters to a method.
     */
    class AnyParameters extends \PHPUnit\Framework\MockObject\Matcher\StatelessInvocation
    {
        public function toString() : string
        {
        }
        /**
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
    }
    /**
     * Invocation matcher which checks if a method has been invoked at least
     * N times.
     */
    class InvokedAtMostCount extends \PHPUnit\Framework\MockObject\Matcher\InvokedRecorder
    {
        /**
         * @var int
         */
        private $allowedInvocations;
        /**
         * @param int $allowedInvocations
         */
        public function __construct($allowedInvocations)
        {
        }
        public function toString() : string
        {
        }
        /**
         * Verifies that the current expectation is valid. If everything is OK the
         * code should just return, if not it must throw an exception.
         *
         * @throws ExpectationFailedException
         */
        public function verify() : void
        {
        }
    }
    /**
     * Invocation matcher which checks if a method was invoked at a certain index.
     *
     * If the expected index number does not match the current invocation index it
     * will not match which means it skips all method and parameter matching. Only
     * once the index is reached will the method and parameter start matching and
     * verifying.
     *
     * If the index is never reached it will throw an exception in index.
     */
    class InvokedAtIndex implements \PHPUnit\Framework\MockObject\Matcher\Invocation
    {
        /**
         * @var int
         */
        private $sequenceIndex;
        /**
         * @var int
         */
        private $currentIndex = -1;
        /**
         * @param int $sequenceIndex
         */
        public function __construct($sequenceIndex)
        {
        }
        public function toString() : string
        {
        }
        /**
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
        {
        }
        /**
         * Verifies that the current expectation is valid. If everything is OK the
         * code should just return, if not it must throw an exception.
         *
         * @throws ExpectationFailedException
         */
        public function verify() : void
        {
        }
    }
    /**
     * Invocation matcher which checks if a method has been invoked at least
     * N times.
     */
    class InvokedAtLeastCount extends \PHPUnit\Framework\MockObject\Matcher\InvokedRecorder
    {
        /**
         * @var int
         */
        private $requiredInvocations;
        /**
         * @param int $requiredInvocations
         */
        public function __construct($requiredInvocations)
        {
        }
        public function toString() : string
        {
        }
        /**
         * Verifies that the current expectation is valid. If everything is OK the
         * code should just return, if not it must throw an exception.
         *
         * @throws ExpectationFailedException
         */
        public function verify() : void
        {
        }
    }
    /**
     * Invocation matcher which looks for specific parameters in the invocations.
     *
     * Checks the parameters of all incoming invocations, the parameter list is
     * checked against the defined constraints in $parameters. If the constraint
     * is met it will return true in matches().
     */
    class Parameters extends \PHPUnit\Framework\MockObject\Matcher\StatelessInvocation
    {
        /**
         * @var Constraint[]
         */
        private $parameters = [];
        /**
         * @var BaseInvocation
         */
        private $invocation;
        /**
         * @var ExpectationFailedException
         */
        private $parameterVerificationResult;
        /**
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct(array $parameters)
        {
        }
        public function toString() : string
        {
        }
        /**
         * @throws \Exception
         *
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        /**
         * Checks if the invocation $invocation matches the current rules. If it
         * does the matcher will get the invoked() method called which should check
         * if an expectation is met.
         *
         * @throws ExpectationFailedException
         *
         * @return bool
         */
        public function verify()
        {
        }
        /**
         * @throws ExpectationFailedException
         *
         * @return bool
         */
        private function guardAgainstDuplicateEvaluationOfParameterConstraints()
        {
        }
    }
    /**
     * Invocation matcher which checks if a method has been invoked a certain amount
     * of times.
     * If the number of invocations exceeds the value it will immediately throw an
     * exception,
     * If the number is less it will later be checked in verify() and also throw an
     * exception.
     */
    class InvokedCount extends \PHPUnit\Framework\MockObject\Matcher\InvokedRecorder
    {
        /**
         * @var int
         */
        private $expectedCount;
        /**
         * @param int $expectedCount
         */
        public function __construct($expectedCount)
        {
        }
        /**
         * @return bool
         */
        public function isNever()
        {
        }
        public function toString() : string
        {
        }
        /**
         * @throws ExpectationFailedException
         */
        public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
        {
        }
        /**
         * Verifies that the current expectation is valid. If everything is OK the
         * code should just return, if not it must throw an exception.
         *
         * @throws ExpectationFailedException
         */
        public function verify() : void
        {
        }
    }
}
namespace PHPUnit\Framework\MockObject {
    interface MockObject extends \PHPUnit_Framework_MockObject_MockObject
    {
    }
    /**
     * Main matcher which defines a full expectation using method, parameter and
     * invocation matchers.
     * This matcher encapsulates all the other matchers and allows the builder to
     * set the specific matchers when the appropriate methods are called (once(),
     * where() etc.).
     *
     * All properties are public so that they can easily be accessed by the builder.
     */
    class Matcher implements \PHPUnit\Framework\MockObject\Matcher\Invocation
    {
        /**
         * @var MatcherInvocation
         */
        private $invocationMatcher;
        /**
         * @var mixed
         */
        private $afterMatchBuilderId;
        /**
         * @var bool
         */
        private $afterMatchBuilderIsInvoked = false;
        /**
         * @var MethodName
         */
        private $methodNameMatcher;
        /**
         * @var Parameters
         */
        private $parametersMatcher;
        /**
         * @var Stub
         */
        private $stub;
        public function __construct(\PHPUnit\Framework\MockObject\Matcher\Invocation $invocationMatcher)
        {
        }
        public function hasMatchers() : bool
        {
        }
        public function hasMethodNameMatcher() : bool
        {
        }
        public function getMethodNameMatcher() : \PHPUnit\Framework\MockObject\Matcher\MethodName
        {
        }
        public function setMethodNameMatcher(\PHPUnit\Framework\MockObject\Matcher\MethodName $matcher) : void
        {
        }
        public function hasParametersMatcher() : bool
        {
        }
        public function getParametersMatcher() : \PHPUnit\Framework\MockObject\Matcher\Parameters
        {
        }
        public function setParametersMatcher($matcher) : void
        {
        }
        public function setStub($stub) : void
        {
        }
        public function setAfterMatchBuilderId($id) : void
        {
        }
        /**
         * @throws \Exception
         * @throws RuntimeException
         * @throws ExpectationFailedException
         */
        public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        /**
         * @throws RuntimeException
         * @throws ExpectationFailedException
         *
         * @return bool
         */
        public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        /**
         * @throws RuntimeException
         * @throws ExpectationFailedException
         */
        public function verify() : void
        {
        }
        public function toString() : string
        {
        }
    }
    /**
     * An object that stubs the process of a normal method for a mock object.
     *
     * The stub object will replace the code for the stubbed method and return a
     * specific value instead of the original value.
     */
    interface Stub extends \PHPUnit\Framework\SelfDescribing
    {
        /**
         * Fakes the processing of the invocation $invocation by returning a
         * specific value.
         *
         * @param Invocation $invocation The invocation which was mocked and matched by the current method and argument matchers
         */
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation);
    }
}
namespace PHPUnit\Framework\MockObject\Stub {
    /**
     * Stubs a method by returning a user-defined value.
     */
    class ReturnStub implements \PHPUnit\Framework\MockObject\Stub
    {
        /**
         * @var mixed
         */
        private $value;
        public function __construct($value)
        {
        }
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function toString() : string
        {
        }
    }
    /**
     * Stubs a method by returning a user-defined stack of values.
     */
    class ConsecutiveCalls implements \PHPUnit\Framework\MockObject\Stub
    {
        /**
         * @var array
         */
        private $stack;
        /**
         * @var mixed
         */
        private $value;
        public function __construct(array $stack)
        {
        }
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function toString() : string
        {
        }
    }
    /**
     * Stubs a method by returning an argument that was passed to the mocked method.
     */
    class ReturnArgument implements \PHPUnit\Framework\MockObject\Stub
    {
        /**
         * @var int
         */
        private $argumentIndex;
        public function __construct($argumentIndex)
        {
        }
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function toString() : string
        {
        }
    }
    /**
     * Stubs a method by returning a user-defined reference to a value.
     */
    class ReturnReference implements \PHPUnit\Framework\MockObject\Stub
    {
        /**
         * @var mixed
         */
        private $reference;
        public function __construct(&$reference)
        {
        }
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function toString() : string
        {
        }
    }
    /**
     * Stubs a method by returning a value from a map.
     */
    class ReturnValueMap implements \PHPUnit\Framework\MockObject\Stub
    {
        /**
         * @var array
         */
        private $valueMap;
        public function __construct(array $valueMap)
        {
        }
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function toString() : string
        {
        }
    }
    class ReturnCallback implements \PHPUnit\Framework\MockObject\Stub
    {
        private $callback;
        public function __construct($callback)
        {
        }
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function toString() : string
        {
        }
    }
    /**
     * Stubs a method by returning the current object.
     */
    class ReturnSelf implements \PHPUnit\Framework\MockObject\Stub
    {
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
        {
        }
        public function toString() : string
        {
        }
    }
    /**
     * Stubs a method by raising a user-defined exception.
     */
    class Exception implements \PHPUnit\Framework\MockObject\Stub
    {
        private $exception;
        public function __construct(\Throwable $exception)
        {
        }
        public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
        {
        }
        public function toString() : string
        {
        }
    }
}
namespace PHPUnit\Framework\MockObject {
    final class MockMethod
    {
        /**
         * @var Text_Template[]
         */
        private static $templates = [];
        /**
         * @var string
         */
        private $className;
        /**
         * @var string
         */
        private $methodName;
        /**
         * @var bool
         */
        private $cloneArguments;
        /**
         * @var string string
         */
        private $modifier;
        /**
         * @var string
         */
        private $argumentsForDeclaration;
        /**
         * @var string
         */
        private $argumentsForCall;
        /**
         * @var string
         */
        private $returnType;
        /**
         * @var string
         */
        private $reference;
        /**
         * @var bool
         */
        private $callOriginalMethod;
        /**
         * @var bool
         */
        private $static;
        /**
         * @var ?string
         */
        private $deprecation;
        /**
         * @var bool
         */
        private $allowsReturnNull;
        public static function fromReflection(\ReflectionMethod $method, bool $callOriginalMethod, bool $cloneArguments) : self
        {
        }
        public static function fromName(string $fullClassName, string $methodName, bool $cloneArguments) : self
        {
        }
        public function __construct(string $className, string $methodName, bool $cloneArguments, string $modifier, string $argumentsForDeclaration, string $argumentsForCall, string $returnType, string $reference, bool $callOriginalMethod, bool $static, ?string $deprecation, bool $allowsReturnNull)
        {
        }
        public function getName() : string
        {
        }
        /**
         * @throws \ReflectionException
         * @throws \PHPUnit\Framework\MockObject\RuntimeException
         * @throws \InvalidArgumentException
         */
        public function generateCode() : string
        {
        }
        private function getTemplate(string $template) : \Text_Template
        {
        }
        /**
         * Returns the parameters of a function or method.
         *
         * @throws RuntimeException
         */
        private static function getMethodParameters(\ReflectionMethod $method, bool $forCall = false) : string
        {
        }
    }
    /**
     * Mock Object Code Generator
     */
    class Generator
    {
        /**
         * @var array
         */
        private const BLACKLISTED_METHOD_NAMES = ['__CLASS__' => true, '__DIR__' => true, '__FILE__' => true, '__FUNCTION__' => true, '__LINE__' => true, '__METHOD__' => true, '__NAMESPACE__' => true, '__TRAIT__' => true, '__clone' => true, '__halt_compiler' => true];
        /**
         * @var array
         */
        private static $cache = [];
        /**
         * @var Text_Template[]
         */
        private static $templates = [];
        /**
         * Returns a mock object for the specified class.
         *
         * @param string|string[] $type
         * @param array           $methods
         * @param string          $mockClassName
         * @param bool            $callOriginalConstructor
         * @param bool            $callOriginalClone
         * @param bool            $callAutoload
         * @param bool            $cloneArguments
         * @param bool            $callOriginalMethods
         * @param object          $proxyTarget
         * @param bool            $allowMockingUnknownTypes
         * @param bool            $returnValueGeneration
         *
         * @throws Exception
         * @throws RuntimeException
         * @throws \PHPUnit\Framework\Exception
         * @throws \ReflectionException
         *
         * @return MockObject
         */
        public function getMock($type, $methods = [], array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $cloneArguments = true, $callOriginalMethods = false, $proxyTarget = null, $allowMockingUnknownTypes = true, $returnValueGeneration = true)
        {
        }
        /**
         * Returns a mock object for the specified abstract class with all abstract
         * methods of the class mocked. Concrete methods to mock can be specified with
         * the last parameter
         *
         * @param string $originalClassName
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param array  $mockedMethods
         * @param bool   $cloneArguments
         *
         * @throws \ReflectionException
         * @throws RuntimeException
         * @throws Exception
         *
         * @return MockObject
         */
        public function getMockForAbstractClass($originalClassName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = true)
        {
        }
        /**
         * Returns a mock object for the specified trait with all abstract methods
         * of the trait mocked. Concrete methods to mock can be specified with the
         * `$mockedMethods` parameter.
         *
         * @param string $traitName
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param array  $mockedMethods
         * @param bool   $cloneArguments
         *
         * @throws \ReflectionException
         * @throws RuntimeException
         * @throws Exception
         *
         * @return MockObject
         */
        public function getMockForTrait($traitName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = true)
        {
        }
        /**
         * Returns an object for the specified trait.
         *
         * @param string $traitName
         * @param string $traitClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         *
         * @throws \ReflectionException
         * @throws RuntimeException
         * @throws Exception
         *
         * @return object
         */
        public function getObjectForTrait($traitName, array $arguments = [], $traitClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true)
        {
        }
        /**
         * @param array|string $type
         * @param array        $methods
         * @param string       $mockClassName
         * @param bool         $callOriginalClone
         * @param bool         $callAutoload
         * @param bool         $cloneArguments
         * @param bool         $callOriginalMethods
         *
         * @throws \ReflectionException
         * @throws \PHPUnit\Framework\MockObject\RuntimeException
         *
         * @return array
         */
        public function generate($type, array $methods = null, $mockClassName = '', $callOriginalClone = true, $callAutoload = true, $cloneArguments = true, $callOriginalMethods = false)
        {
        }
        /**
         * @param string $wsdlFile
         * @param string $className
         *
         * @throws RuntimeException
         *
         * @return string
         */
        public function generateClassFromWsdl($wsdlFile, $className, array $methods = [], array $options = [])
        {
        }
        /**
         * @param string $className
         *
         * @throws \ReflectionException
         *
         * @return string[]
         */
        public function getClassMethods($className) : array
        {
        }
        /**
         * @throws \ReflectionException
         *
         * @return MockMethod[]
         */
        public function mockClassMethods(string $className, bool $callOriginalMethods, bool $cloneArguments) : array
        {
        }
        /**
         * @throws \ReflectionException
         *
         * @return \ReflectionMethod[]
         */
        private function userDefinedInterfaceMethods(string $interfaceName) : array
        {
        }
        /**
         * @param string       $code
         * @param string       $className
         * @param array|string $type
         * @param bool         $callOriginalConstructor
         * @param bool         $callAutoload
         * @param bool         $callOriginalMethods
         * @param object       $proxyTarget
         * @param bool         $returnValueGeneration
         *
         * @throws \ReflectionException
         * @throws RuntimeException
         *
         * @return MockObject
         */
        private function getObject($code, $className, $type = '', $callOriginalConstructor = false, $callAutoload = false, array $arguments = [], $callOriginalMethods = false, $proxyTarget = null, $returnValueGeneration = true)
        {
        }
        /**
         * @param string $code
         * @param string $className
         */
        private function evalClass($code, $className) : void
        {
        }
        /**
         * @param array|string $type
         * @param null|array   $explicitMethods
         * @param string       $mockClassName
         * @param bool         $callOriginalClone
         * @param bool         $callAutoload
         * @param bool         $cloneArguments
         * @param bool         $callOriginalMethods
         *
         * @throws \InvalidArgumentException
         * @throws \ReflectionException
         * @throws RuntimeException
         *
         * @return array
         */
        private function generateMock($type, $explicitMethods, $mockClassName, $callOriginalClone, $callAutoload, $cloneArguments, $callOriginalMethods)
        {
        }
        /**
         * @param array|string $type
         * @param string       $className
         * @param string       $prefix
         *
         * @return array
         */
        private function generateClassName($type, $className, $prefix)
        {
        }
        /**
         * @param bool $isInterface
         *
         * @return string
         */
        private function generateMockClassDeclaration(array $mockClassName, $isInterface, array $additionalInterfaces = [])
        {
        }
        /**
         * @return bool
         */
        private function canMockMethod(\ReflectionMethod $method)
        {
        }
        /**
         * Returns whether a method name is blacklisted
         *
         * @param string $name
         *
         * @return bool
         */
        private function isMethodNameBlacklisted($name)
        {
        }
        /**
         * @param string $template
         *
         * @throws \InvalidArgumentException
         *
         * @return Text_Template
         */
        private function getTemplate($template)
        {
        }
    }
}
namespace PHPUnit\Framework\MockObject\Builder {
    /**
     * Builder interface for unique identifiers.
     *
     * Defines the interface for recording unique identifiers. The identifiers
     * can be used to define the invocation order of expectations. The expectation
     * is recorded using id() and then defined in order using
     * PHPUnit\Framework\MockObject\Builder\Match::after().
     */
    interface Identity
    {
        /**
         * Sets the identification of the expectation to $id.
         *
         * @note The identifier is unique per mock object.
         *
         * @param string $id unique identification of expectation
         */
        public function id($id);
    }
    /**
     * Builder interface for stubs which are actions replacing an invocation.
     */
    interface Stub extends \PHPUnit\Framework\MockObject\Builder\Identity
    {
        /**
         * Stubs the matching method with the stub object $stub. Any invocations of
         * the matched method will now be handled by the stub instead.
         *
         * @return Identity
         */
        public function will(\PHPUnit\Framework\MockObject\Stub $stub);
    }
    /**
     * Builder interface for invocation order matches.
     */
    interface Match extends \PHPUnit\Framework\MockObject\Builder\Stub
    {
        /**
         * Defines the expectation which must occur before the current is valid.
         *
         * @param string $id the identification of the expectation that should
         *                   occur before this one
         *
         * @return Stub
         */
        public function after($id);
    }
    /**
     * Builder interface for parameter matchers.
     */
    interface ParametersMatch extends \PHPUnit\Framework\MockObject\Builder\Match
    {
        /**
         * Sets the parameters to match for, each parameter to this function will
         * be part of match. To perform specific matches or constraints create a
         * new PHPUnit\Framework\Constraint\Constraint and use it for the parameter.
         * If the parameter value is not a constraint it will use the
         * PHPUnit\Framework\Constraint\IsEqual for the value.
         *
         * Some examples:
         * <code>
         * // match first parameter with value 2
         * $b->with(2);
         * // match first parameter with value 'smock' and second identical to 42
         * $b->with('smock', new PHPUnit\Framework\Constraint\IsEqual(42));
         * </code>
         *
         * @return ParametersMatch
         */
        public function with(...$arguments);
        /**
         * Sets a matcher which allows any kind of parameters.
         *
         * Some examples:
         * <code>
         * // match any number of parameters
         * $b->withAnyParameters();
         * </code>
         *
         * @return AnyParameters
         */
        public function withAnyParameters();
    }
    /**
     * Builder interface for matcher of method names.
     */
    interface MethodNameMatch extends \PHPUnit\Framework\MockObject\Builder\ParametersMatch
    {
        /**
         * Adds a new method name match and returns the parameter match object for
         * further matching possibilities.
         *
         * @param \PHPUnit\Framework\Constraint\Constraint $name Constraint for matching method, if a string is passed it will use the PHPUnit_Framework_Constraint_IsEqual
         *
         * @return ParametersMatch
         */
        public function method($name);
    }
    /**
     * Builder for mocked or stubbed invocations.
     *
     * Provides methods for building expectations without having to resort to
     * instantiating the various matchers manually. These methods also form a
     * more natural way of reading the expectation. This class should be together
     * with the test case PHPUnit\Framework\MockObject\TestCase.
     */
    class InvocationMocker implements \PHPUnit\Framework\MockObject\Builder\MethodNameMatch
    {
        /**
         * @var MatcherCollection
         */
        private $collection;
        /**
         * @var Matcher
         */
        private $matcher;
        /**
         * @var string[]
         */
        private $configurableMethods;
        public function __construct(\PHPUnit\Framework\MockObject\Stub\MatcherCollection $collection, \PHPUnit\Framework\MockObject\Matcher\Invocation $invocationMatcher, array $configurableMethods)
        {
        }
        /**
         * @return Matcher
         */
        public function getMatcher()
        {
        }
        /**
         * @return InvocationMocker
         */
        public function id($id)
        {
        }
        /**
         * @return InvocationMocker
         */
        public function will(\PHPUnit\Framework\MockObject\Stub $stub)
        {
        }
        /**
         * @return InvocationMocker
         */
        public function willReturn($value, ...$nextValues)
        {
        }
        /**
         * @param mixed $reference
         *
         * @return InvocationMocker
         */
        public function willReturnReference(&$reference)
        {
        }
        /**
         * @return InvocationMocker
         */
        public function willReturnMap(array $valueMap)
        {
        }
        /**
         * @return InvocationMocker
         */
        public function willReturnArgument($argumentIndex)
        {
        }
        /**
         * @param callable $callback
         *
         * @return InvocationMocker
         */
        public function willReturnCallback($callback)
        {
        }
        /**
         * @return InvocationMocker
         */
        public function willReturnSelf()
        {
        }
        /**
         * @return InvocationMocker
         */
        public function willReturnOnConsecutiveCalls(...$values)
        {
        }
        /**
         * @return InvocationMocker
         */
        public function willThrowException(\Throwable $exception)
        {
        }
        /**
         * @return InvocationMocker
         */
        public function after($id)
        {
        }
        /**
         * @param array ...$arguments
         *
         * @throws RuntimeException
         *
         * @return InvocationMocker
         */
        public function with(...$arguments)
        {
        }
        /**
         * @param array ...$arguments
         *
         * @throws RuntimeException
         *
         * @return InvocationMocker
         */
        public function withConsecutive(...$arguments)
        {
        }
        /**
         * @throws RuntimeException
         *
         * @return InvocationMocker
         */
        public function withAnyParameters()
        {
        }
        /**
         * @param Constraint|string $constraint
         *
         * @throws RuntimeException
         *
         * @return InvocationMocker
         */
        public function method($constraint)
        {
        }
        /**
         * Validate that a parameters matcher can be defined, throw exceptions otherwise.
         *
         * @throws RuntimeException
         */
        private function canDefineParameters() : void
        {
        }
    }
}
namespace PHPUnit\Framework\MockObject {
    /**
     * Interface for exceptions used by PHPUnit_MockObject.
     */
    interface Exception extends \Throwable
    {
    }
    class RuntimeException extends \RuntimeException implements \PHPUnit\Framework\MockObject\Exception
    {
    }
    class BadMethodCallException extends \BadMethodCallException implements \PHPUnit\Framework\MockObject\Exception
    {
    }
}
namespace PHPUnit\Framework {
    class InvalidCoversTargetException extends \PHPUnit\Framework\CodeCoverageException
    {
    }
    class MissingCoversAnnotationException extends \PHPUnit\Framework\RiskyTestError
    {
    }
}
namespace PHPUnit\Framework\Error {
    /**
     * Wrapper for PHP errors.
     */
    class Error extends \PHPUnit\Framework\Exception
    {
        public function __construct(string $message, int $code, string $file, int $line, \Exception $previous = null)
        {
        }
    }
    class Warning extends \PHPUnit\Framework\Error\Error
    {
        public static $enabled = true;
    }
    class Notice extends \PHPUnit\Framework\Error\Error
    {
        public static $enabled = true;
    }
    class Deprecated extends \PHPUnit\Framework\Error\Error
    {
        public static $enabled = true;
    }
}
namespace PHPUnit\Framework {
    /**
     * A warning.
     */
    class WarningTestCase extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * @var bool
         */
        protected $useErrorHandler = false;
        /**
         * @param string $message
         */
        public function __construct($message = '')
        {
        }
        public function getMessage() : string
        {
        }
        /**
         * Returns a string representation of the test case.
         */
        public function toString() : string
        {
        }
        /**
         * @throws Exception
         */
        protected function runTest() : void
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    /**
     * Constraint that asserts that the string it is evaluated for matches
     * a regular expression.
     *
     * Checks a given value using the Perl Compatible Regular Expression extension
     * in PHP. The pattern is matched by executing preg_match().
     *
     * The pattern string passed in the constructor.
     */
    class RegularExpression extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $pattern;
        public function __construct(string $pattern)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that asserts that the object it is evaluated for is an instance
     * of a given class.
     *
     * The expected class name is passed in the constructor.
     */
    class IsInstanceOf extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $className;
        public function __construct(string $className)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
        private function getType() : string
        {
        }
    }
    /**
     * Constraint that checks if the file/dir(name) that it is evaluated for is readable.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class IsReadable extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that accepts false.
     */
    class IsFalse extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that asserts that the value it is evaluated for is less than
     * a given value.
     */
    class LessThan extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var float|int
         */
        private $value;
        /**
         * @param float|int $value
         */
        public function __construct($value)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    class ExceptionMessageRegularExpression extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $expectedMessageRegExp;
        public function __construct(string $expected)
        {
        }
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param \PHPUnit\Framework\Exception $other
         *
         * @throws \Exception
         * @throws \PHPUnit\Framework\Exception
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that checks if the directory(name) that it is evaluated for exists.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class DirectoryExists extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Logical OR.
     */
    class LogicalOr extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint[]
         */
        private $constraints = [];
        public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
        {
        }
        /**
         * @param Constraint[] $constraints
         */
        public function setConstraints(array $constraints) : void
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Counts the number of constraint elements.
         */
        public function count() : int
        {
        }
    }
    /**
     * Constraint that accepts any input value.
     */
    class IsAnything extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Counts the number of constraint elements.
         */
        public function count() : int
        {
        }
    }
    class ExceptionMessage extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $expectedMessage;
        public function __construct(string $expected)
        {
        }
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param \Throwable $other
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that asserts that the Traversable it is applied to contains
     * only values of a given type.
     */
    class TraversableContainsOnly extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint
         */
        private $constraint;
        /**
         * @var string
         */
        private $type;
        /**
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct(string $type, bool $isNativeType = true)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
    }
    /**
     * Constraint that asserts that the class it is evaluated for has a given
     * attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class ClassHasAttribute extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $attributeName;
        public function __construct(string $attributeName)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
        protected function attributeName() : string
        {
        }
    }
    /**
     * Constraint that asserts that the class it is evaluated for has a given
     * static attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class ClassHasStaticAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that accepts true.
     */
    class IsTrue extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Logical AND.
     */
    class LogicalAnd extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint[]
         */
        private $constraints = [];
        public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
        {
        }
        /**
         * @param Constraint[] $constraints
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function setConstraints(array $constraints) : void
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Counts the number of constraint elements.
         */
        public function count() : int
        {
        }
    }
    /**
     * Constraint that asserts that the array it is evaluated for has a given key.
     *
     * Uses array_key_exists() to check if the key is found in the input array, if
     * not found the evaluation fails.
     *
     * The array key is passed in the constructor.
     */
    class ArrayHasKey extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int|string
         */
        private $key;
        /**
         * @param int|string $key
         */
        public function __construct($key)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
    }
    abstract class Composite extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint
         */
        private $innerConstraint;
        public function __construct(\PHPUnit\Framework\Constraint\Constraint $innerConstraint)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Counts the number of constraint elements.
         */
        public function count() : int
        {
        }
        protected function innerConstraint() : \PHPUnit\Framework\Constraint\Constraint
        {
        }
    }
    /**
     * Constraint that asserts that the string it is evaluated for begins with a
     * given prefix.
     */
    class StringStartsWith extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $prefix;
        public function __construct(string $prefix)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that asserts that a string is valid JSON.
     */
    class IsJson extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Asserts whether or not two JSON objects are equal.
     */
    class JsonMatches extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $value;
        public function __construct(string $value)
        {
        }
        /**
         * Returns a string representation of the object.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * This method can be overridden to implement the evaluation algorithm.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Throws an exception for the given compared value and test description
         *
         * @param mixed             $other             evaluated value or object
         * @param string            $description       Additional information about the test
         * @param ComparisonFailure $comparisonFailure
         *
         * @throws ExpectationFailedException
         * @throws \PHPUnit\Framework\Exception
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null) : void
        {
        }
    }
    class Attribute extends \PHPUnit\Framework\Constraint\Composite
    {
        /**
         * @var string
         */
        private $attributeName;
        public function __construct(\PHPUnit\Framework\Constraint\Constraint $constraint, string $attributeName)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \PHPUnit\Framework\Exception
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Logical XOR.
     */
    class LogicalXor extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint[]
         */
        private $constraints = [];
        public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
        {
        }
        /**
         * @param Constraint[] $constraints
         */
        public function setConstraints(array $constraints) : void
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Counts the number of constraint elements.
         */
        public function count() : int
        {
        }
    }
    /**
     * Constraint that asserts that the value it is evaluated for is of a
     * specified type.
     *
     * The expected value is passed in the constructor.
     */
    class IsType extends \PHPUnit\Framework\Constraint\Constraint
    {
        public const TYPE_ARRAY = 'array';
        public const TYPE_BOOL = 'bool';
        public const TYPE_FLOAT = 'float';
        public const TYPE_INT = 'int';
        public const TYPE_NULL = 'null';
        public const TYPE_NUMERIC = 'numeric';
        public const TYPE_OBJECT = 'object';
        public const TYPE_RESOURCE = 'resource';
        public const TYPE_STRING = 'string';
        public const TYPE_SCALAR = 'scalar';
        public const TYPE_CALLABLE = 'callable';
        public const TYPE_ITERABLE = 'iterable';
        /**
         * @var array
         */
        private const KNOWN_TYPES = ['array' => true, 'boolean' => true, 'bool' => true, 'double' => true, 'float' => true, 'integer' => true, 'int' => true, 'null' => true, 'numeric' => true, 'object' => true, 'real' => true, 'resource' => true, 'string' => true, 'scalar' => true, 'callable' => true, 'iterable' => true];
        /**
         * @var string
         */
        private $type;
        /**
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct(string $type)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that checks whether a variable is empty().
     */
    class IsEmpty extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that asserts that the Traversable it is applied to contains
     * a given value.
     */
    class TraversableContains extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var bool
         */
        private $checkForObjectIdentity;
        /**
         * @var bool
         */
        private $checkForNonObjectIdentity;
        /**
         * @var mixed
         */
        private $value;
        /**
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($value, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that checks if one value is equal to another.
     *
     * Equality is checked with PHP's == operator, the operator is explained in
     * detail at {@url https://php.net/manual/en/types.comparisons.php}.
     * Two values are equal if they have the same value disregarding type.
     *
     * The expected value is passed in the constructor.
     */
    class IsEqual extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var mixed
         */
        private $value;
        /**
         * @var float
         */
        private $delta;
        /**
         * @var int
         */
        private $maxDepth;
        /**
         * @var bool
         */
        private $canonicalize;
        /**
         * @var bool
         */
        private $ignoreCase;
        public function __construct($value, float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
    }
    /**
     * ...
     */
    class StringMatchesFormatDescription extends \PHPUnit\Framework\Constraint\RegularExpression
    {
        /**
         * @var string
         */
        private $string;
        public function __construct(string $string)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        protected function failureDescription($other) : string
        {
        }
        protected function additionalFailureDescription($other) : string
        {
        }
        private function createPatternFromFormat(string $string) : string
        {
        }
        private function convertNewlines($text) : string
        {
        }
    }
    /**
     * Constraint that accepts nan.
     */
    class IsNan extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    class Count extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        private $expectedCount;
        public function __construct(int $expected)
        {
        }
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         */
        protected function matches($other) : bool
        {
        }
        /**
         * @param iterable $other
         */
        protected function getCountOf($other) : ?int
        {
        }
        /**
         * Returns the total number of iterations from a generator.
         * This will fully exhaust the generator.
         */
        protected function getCountOfGenerator(\Generator $generator) : int
        {
        }
        /**
         * Returns the description of the failure.
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that asserts that the object it is evaluated for has a given
     * attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class ObjectHasAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that accepts infinite.
     */
    class IsInfinite extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that asserts that the string it is evaluated for contains
     * a given string.
     *
     * Uses mb_strpos() to find the position of the string in the input, if not
     * found the evaluation fails.
     *
     * The sub-string is passed in the constructor.
     */
    class StringContains extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $string;
        /**
         * @var bool
         */
        private $ignoreCase;
        public function __construct(string $string, bool $ignoreCase = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that asserts that one value is identical to another.
     *
     * Identical check is performed with PHP's === operator, the operator is
     * explained in detail at
     * {@url https://php.net/manual/en/types.comparisons.php}.
     * Two values are identical if they have the same value and are of the same
     * type.
     *
     * The expected value is passed in the constructor.
     */
    class IsIdentical extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var float
         */
        private const EPSILON = 1.0E-10;
        /**
         * @var mixed
         */
        private $value;
        public function __construct($value)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Provides human readable messages for each JSON error.
     */
    class JsonMatchesErrorMessageProvider
    {
        /**
         * Translates JSON error to a human readable string.
         */
        public static function determineJsonError(string $error, string $prefix = '') : ?string
        {
        }
        /**
         * Translates a given type to a human readable message prefix.
         */
        public static function translateTypeToPrefix(string $type) : string
        {
        }
    }
    /**
     * Constraint that accepts null.
     */
    class IsNull extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that asserts that the array it is evaluated for has a specified subset.
     *
     * Uses array_replace_recursive() to check if a key value subset is part of the
     * subject array.
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3494
     */
    class ArraySubset extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var iterable
         */
        private $subset;
        /**
         * @var bool
         */
        private $strict;
        public function __construct(iterable $subset, bool $strict = false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
        private function toArray(iterable $other) : array
        {
        }
    }
    class SameSize extends \PHPUnit\Framework\Constraint\Count
    {
        public function __construct(iterable $expected)
        {
        }
    }
    class Exception extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $className;
        public function __construct(string $className)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that checks if the file/dir(name) that it is evaluated for is writable.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class IsWritable extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
    class ExceptionCode extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int|string
         */
        private $expectedCode;
        /**
         * @param int|string $expected
         */
        public function __construct($expected)
        {
        }
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param \Throwable $other
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that evaluates against a specified closure.
     */
    class Callback extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var callable
         */
        private $callback;
        public function __construct(callable $callback)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $value. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Logical NOT.
     */
    class LogicalNot extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint
         */
        private $constraint;
        public static function negate(string $string) : string
        {
        }
        /**
         * @param Constraint|mixed $constraint
         */
        public function __construct($constraint)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        value or object to evaluate
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @throws ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Counts the number of constraint elements.
         */
        public function count() : int
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        protected function failureDescription($other) : string
        {
        }
    }
    /**
     * Constraint that asserts that the value it is evaluated for is greater
     * than a given value.
     */
    class GreaterThan extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var float|int
         */
        private $value;
        /**
         * @param float|int $value
         */
        public function __construct($value)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that asserts that the string it is evaluated for ends with a given
     * suffix.
     */
    class StringEndsWith extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        private $suffix;
        public function __construct(string $suffix)
        {
        }
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that accepts finite.
     */
    class IsFinite extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
    }
    /**
     * Constraint that checks if the file(name) that it is evaluated for exists.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class FileExists extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Returns a string representation of the constraint.
         */
        public function toString() : string
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other value or object to evaluate
         */
        protected function matches($other) : bool
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other evaluated value or object
         */
        protected function failureDescription($other) : string
        {
        }
    }
}
namespace PHPUnit\Framework {
    /**
     * An incomplete test case
     */
    class IncompleteTestCase extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * @var bool
         */
        protected $useErrorHandler = false;
        /**
         * @var bool
         */
        protected $useOutputBuffering = false;
        public function __construct(string $className, string $methodName, string $message = '')
        {
        }
        public function getMessage() : string
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * @throws Exception
         */
        protected function runTest() : void
        {
        }
    }
    /**
     * A TestFailure collects a failed test together with the caught exception.
     */
    class TestFailure
    {
        /**
         * @var null|Test
         */
        protected $failedTest;
        /**
         * @var Throwable
         */
        protected $thrownException;
        /**
         * @var string
         */
        private $testName;
        /**
         * Returns a description for an exception.
         *
         * @throws \InvalidArgumentException
         */
        public static function exceptionToString(\Throwable $e) : string
        {
        }
        /**
         * Constructs a TestFailure with the given test and exception.
         *
         * @param Throwable $t
         */
        public function __construct(\PHPUnit\Framework\Test $failedTest, $t)
        {
        }
        /**
         * Returns a short description of the failure.
         */
        public function toString() : string
        {
        }
        /**
         * Returns a description for the thrown exception.
         *
         * @throws \InvalidArgumentException
         */
        public function getExceptionAsString() : string
        {
        }
        /**
         * Returns the name of the failing test (including data set, if any).
         */
        public function getTestName() : string
        {
        }
        /**
         * Returns the failing test.
         *
         * Note: The test object is not set when the test is executed in process
         * isolation.
         *
         * @see Exception
         */
        public function failedTest() : ?\PHPUnit\Framework\Test
        {
        }
        /**
         * Gets the thrown exception.
         */
        public function thrownException() : \Throwable
        {
        }
        /**
         * Returns the exception's message.
         */
        public function exceptionMessage() : string
        {
        }
        /**
         * Returns true if the thrown exception
         * is of type AssertionFailedError.
         */
        public function isFailure() : bool
        {
        }
    }
    /**
     * A skipped test case
     */
    class SkippedTestCase extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * @var bool
         */
        protected $useErrorHandler = false;
        /**
         * @var bool
         */
        protected $useOutputBuffering = false;
        public function __construct(string $className, string $methodName, string $message = '')
        {
        }
        public function getMessage() : string
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function toString() : string
        {
        }
        /**
         * @throws Exception
         */
        protected function runTest() : void
        {
        }
    }
}
namespace PHPUnit\Runner {
    final class ResultCacheExtension implements \PHPUnit\Runner\AfterIncompleteTestHook, \PHPUnit\Runner\AfterLastTestHook, \PHPUnit\Runner\AfterRiskyTestHook, \PHPUnit\Runner\AfterSkippedTestHook, \PHPUnit\Runner\AfterSuccessfulTestHook, \PHPUnit\Runner\AfterTestErrorHook, \PHPUnit\Runner\AfterTestFailureHook, \PHPUnit\Runner\AfterTestWarningHook
    {
        /**
         * @var TestResultCacheInterface
         */
        private $cache;
        public function __construct(\PHPUnit\Runner\TestResultCache $cache)
        {
        }
        public function flush() : void
        {
        }
        public function executeAfterSuccessfulTest(string $test, float $time) : void
        {
        }
        public function executeAfterIncompleteTest(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterRiskyTest(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterSkippedTest(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterTestError(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterTestFailure(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterTestWarning(string $test, string $message, float $time) : void
        {
        }
        public function executeAfterLastTest() : void
        {
        }
        /**
         * @param string $test A long description format of the current test
         *
         * @return string The test name without TestSuiteClassName:: and @dataprovider details
         */
        private function getTestName(string $test) : string
        {
        }
    }
    /**
     * Runner for PHPT test cases.
     */
    class PhptTestCase implements \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
    {
        /**
         * @var string[]
         */
        private const SETTINGS = ['allow_url_fopen=1', 'auto_append_file=', 'auto_prepend_file=', 'disable_functions=', 'display_errors=1', 'docref_ext=.html', 'docref_root=', 'error_append_string=', 'error_prepend_string=', 'error_reporting=-1', 'html_errors=0', 'log_errors=0', 'magic_quotes_runtime=0', 'open_basedir=', 'output_buffering=Off', 'output_handler=', 'report_memleaks=0', 'report_zend_debug=0', 'safe_mode=0', 'xdebug.default_enable=0'];
        /**
         * @var string
         */
        private $filename;
        /**
         * @var AbstractPhpProcess
         */
        private $phpUtil;
        /**
         * @var string
         */
        private $output = '';
        /**
         * Constructs a test case with the given filename.
         *
         * @throws Exception
         */
        public function __construct(string $filename, \PHPUnit\Util\PHP\AbstractPhpProcess $phpUtil = null)
        {
        }
        /**
         * Counts the number of test cases executed by run(TestResult result).
         */
        public function count() : int
        {
        }
        /**
         * Runs a test and collects its result in a TestResult instance.
         *
         * @throws Exception
         * @throws \ReflectionException
         * @throws \SebastianBergmann\CodeCoverage\CoveredCodeNotExecutedException
         * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
         * @throws \SebastianBergmann\CodeCoverage\MissingCoversAnnotationException
         * @throws \SebastianBergmann\CodeCoverage\RuntimeException
         * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
        {
        }
        /**
         * Returns the name of the test case.
         */
        public function getName() : string
        {
        }
        /**
         * Returns a string representation of the test case.
         */
        public function toString() : string
        {
        }
        public function usesDataProvider() : bool
        {
        }
        public function getNumAssertions() : int
        {
        }
        public function getActualOutput() : string
        {
        }
        public function hasOutput() : bool
        {
        }
        /**
         * Parse --INI-- section key value pairs and return as array.
         *
         * @param array|string
         */
        private function parseIniSection($content, $ini = []) : array
        {
        }
        private function parseEnvSection(string $content) : array
        {
        }
        /**
         * @throws Exception
         */
        private function assertPhptExpectation(array $sections, string $output) : void
        {
        }
        /**
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        private function runSkip(array &$sections, \PHPUnit\Framework\TestResult $result, array $settings) : bool
        {
        }
        private function runClean(array &$sections) : void
        {
        }
        /**
         * @throws Exception
         */
        private function parse() : array
        {
        }
        /**
         * @throws Exception
         */
        private function parseExternal(array &$sections) : void
        {
        }
        private function validate(array &$sections) : bool
        {
        }
        private function render(string $code) : string
        {
        }
        private function getCoverageFiles() : array
        {
        }
        private function renderForCoverage(string &$job) : void
        {
        }
        private function cleanupForCoverage() : array
        {
        }
        private function stringifyIni(array $ini) : array
        {
        }
    }
    /**
     * An interface to define how a test suite should be loaded.
     */
    interface TestSuiteLoader
    {
        public function load(string $suiteClassName, string $suiteClassFile = '') : \ReflectionClass;
        public function reload(\ReflectionClass $aClass) : \ReflectionClass;
    }
    /**
     * The standard test suite loader.
     */
    class StandardTestSuiteLoader implements \PHPUnit\Runner\TestSuiteLoader
    {
        /**
         * @throws Exception
         * @throws \PHPUnit\Framework\Exception
         */
        public function load(string $suiteClassName, string $suiteClassFile = '') : \ReflectionClass
        {
        }
        public function reload(\ReflectionClass $aClass) : \ReflectionClass
        {
        }
    }
    /**
     * This class defines the current version of PHPUnit.
     */
    class Version
    {
        private static $pharVersion;
        private static $version;
        /**
         * Returns the current version of PHPUnit.
         */
        public static function id() : string
        {
        }
        public static function series() : string
        {
        }
        public static function getVersionString() : string
        {
        }
        public static function getReleaseChannel() : string
        {
        }
    }
    final class TestSuiteSorter
    {
        /**
         * @var int
         */
        public const ORDER_DEFAULT = 0;
        /**
         * @var int
         */
        public const ORDER_RANDOMIZED = 1;
        /**
         * @var int
         */
        public const ORDER_REVERSED = 2;
        /**
         * @var int
         */
        public const ORDER_DEFECTS_FIRST = 3;
        /**
         * @var int
         */
        public const ORDER_DURATION = 4;
        /**
         * List of sorting weights for all test result codes. A higher number gives higher priority.
         */
        private const DEFECT_SORT_WEIGHT = [\PHPUnit\Runner\BaseTestRunner::STATUS_ERROR => 6, \PHPUnit\Runner\BaseTestRunner::STATUS_FAILURE => 5, \PHPUnit\Runner\BaseTestRunner::STATUS_WARNING => 4, \PHPUnit\Runner\BaseTestRunner::STATUS_INCOMPLETE => 3, \PHPUnit\Runner\BaseTestRunner::STATUS_RISKY => 2, \PHPUnit\Runner\BaseTestRunner::STATUS_SKIPPED => 1, \PHPUnit\Runner\BaseTestRunner::STATUS_UNKNOWN => 0];
        /**
         * @var array<string, int> Associative array of (string => DEFECT_SORT_WEIGHT) elements
         */
        private $defectSortOrder = [];
        /**
         * @var TestResultCacheInterface
         */
        private $cache;
        /**
         * @var array array<string> A list of normalized names of tests before reordering
         */
        private $originalExecutionOrder = [];
        /**
         * @var array array<string> A list of normalized names of tests affected by reordering
         */
        private $executionOrder = [];
        public static function getTestSorterUID(\PHPUnit\Framework\Test $test) : string
        {
        }
        public function __construct(?\PHPUnit\Runner\TestResultCacheInterface $cache = null)
        {
        }
        /**
         * @throws Exception
         */
        public function reorderTestsInSuite(\PHPUnit\Framework\Test $suite, int $order, bool $resolveDependencies, int $orderDefects, bool $isRootTestSuite = true) : void
        {
        }
        public function getOriginalExecutionOrder() : array
        {
        }
        public function getExecutionOrder() : array
        {
        }
        private function sort(\PHPUnit\Framework\TestSuite $suite, int $order, bool $resolveDependencies, int $orderDefects) : void
        {
        }
        private function addSuiteToDefectSortOrder(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        private function suiteOnlyContainsTests(\PHPUnit\Framework\TestSuite $suite) : bool
        {
        }
        private function reverse(array $tests) : array
        {
        }
        private function randomize(array $tests) : array
        {
        }
        private function sortDefectsFirst(array $tests) : array
        {
        }
        private function sortByDuration(array $tests) : array
        {
        }
        /**
         * Comparator callback function to sort tests for "reach failure as fast as possible":
         * 1. sort tests by defect weight defined in self::DEFECT_SORT_WEIGHT
         * 2. when tests are equally defective, sort the fastest to the front
         * 3. do not reorder successful tests
         */
        private function cmpDefectPriorityAndTime(\PHPUnit\Framework\Test $a, \PHPUnit\Framework\Test $b) : int
        {
        }
        /**
         * Compares test duration for sorting tests by duration ascending.
         */
        private function cmpDuration(\PHPUnit\Framework\Test $a, \PHPUnit\Framework\Test $b) : int
        {
        }
        /**
         * Reorder Tests within a TestCase in such a way as to resolve as many dependencies as possible.
         * The algorithm will leave the tests in original running order when it can.
         * For more details see the documentation for test dependencies.
         *
         * Short description of algorithm:
         * 1. Pick the next Test from remaining tests to be checked for dependencies.
         * 2. If the test has no dependencies: mark done, start again from the top
         * 3. If the test has dependencies but none left to do: mark done, start again from the top
         * 4. When we reach the end add any leftover tests to the end. These will be marked 'skipped' during execution.
         *
         * @param array<DataProviderTestSuite|TestCase> $tests
         *
         * @return array<DataProviderTestSuite|TestCase>
         */
        private function resolveDependencies(array $tests) : array
        {
        }
        /**
         * @param DataProviderTestSuite|TestCase $test
         *
         * @return array<string> A list of full test names as "TestSuiteClassName::testMethodName"
         */
        private function getNormalizedDependencyNames($test) : array
        {
        }
        private function calculateTestExecutionOrder(\PHPUnit\Framework\Test $suite) : array
        {
        }
    }
}
namespace PHPUnit\Runner\Filter {
    class Factory
    {
        /**
         * @var array
         */
        private $filters = [];
        /**
         * @throws InvalidArgumentException
         */
        public function addFilter(\ReflectionClass $filter, $args) : void
        {
        }
        public function factory(\Iterator $iterator, \PHPUnit\Framework\TestSuite $suite) : \FilterIterator
        {
        }
    }
    abstract class GroupFilterIterator extends \RecursiveFilterIterator
    {
        /**
         * @var string[]
         */
        protected $groupTests = [];
        public function __construct(\RecursiveIterator $iterator, array $groups, \PHPUnit\Framework\TestSuite $suite)
        {
        }
        public function accept() : bool
        {
        }
        protected abstract function doAccept(string $hash);
    }
    class IncludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
    {
        protected function doAccept(string $hash) : bool
        {
        }
    }
    class NameFilterIterator extends \RecursiveFilterIterator
    {
        /**
         * @var string
         */
        protected $filter;
        /**
         * @var int
         */
        protected $filterMin;
        /**
         * @var int
         */
        protected $filterMax;
        /**
         * @throws \Exception
         */
        public function __construct(\RecursiveIterator $iterator, string $filter)
        {
        }
        public function accept() : bool
        {
        }
        /**
         * @throws \Exception
         */
        protected function setFilter(string $filter) : void
        {
        }
    }
    class ExcludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
    {
        protected function doAccept(string $hash) : bool
        {
        }
    }
}
namespace PHPUnit\Runner {
    class Exception extends \RuntimeException implements \PHPUnit\Exception
    {
    }
    final class TestListenerAdapter implements \PHPUnit\Framework\TestListener
    {
        /**
         * @var TestHook[]
         */
        private $hooks = [];
        /**
         * @var bool
         */
        private $lastTestWasNotSuccessful;
        public function add(\PHPUnit\Runner\TestHook $hook) : void
        {
        }
        public function startTest(\PHPUnit\Framework\Test $test) : void
        {
        }
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
        {
        }
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
        {
        }
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
        {
        }
        public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
        {
        }
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
        {
        }
    }
}
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace foo {
    function func()
    {
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    function globalFunction() : void
    {
    }
    /**
     * Asserts that an array has a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertArrayHasKey($key, $array, string $message = '') : void
    {
    }
    /**
     * Asserts that an array has a specified subset.
     *
     * @param array|ArrayAccess $subset
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3494
     */
    function assertArraySubset($subset, $array, bool $checkForObjectIdentity = \false, string $message = '') : void
    {
    }
    /**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertArrayNotHasKey($key, $array, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertContains($needle, $haystack, string $message = '', bool $ignoreCase = \false, bool $checkForObjectIdentity = \true, bool $checkForNonObjectIdentity = \false) : void
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object contains a needle.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeContains($needle, string $haystackAttributeName, $haystackClassOrObject, string $message = '', bool $ignoreCase = \false, bool $checkForObjectIdentity = \true, bool $checkForNonObjectIdentity = \false) : void
    {
    }
    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotContains($needle, $haystack, string $message = '', bool $ignoreCase = \false, bool $checkForObjectIdentity = \true, bool $checkForNonObjectIdentity = \false) : void
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object does not contain a needle.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotContains($needle, string $haystackAttributeName, $haystackClassOrObject, string $message = '', bool $ignoreCase = \false, bool $checkForObjectIdentity = \true, bool $checkForNonObjectIdentity = \false) : void
    {
    }
    /**
     * Asserts that a haystack contains only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = \null, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object contains only values of a given type.
     *
     * @param object|string $haystackClassOrObject
     * @param bool          $isNativeType
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeContainsOnly(string $type, string $haystackAttributeName, $haystackClassOrObject, ?bool $isNativeType = \null, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = \null, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object does not contain only values of a given
     * type.
     *
     * @param object|string $haystackClassOrObject
     * @param bool          $isNativeType
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotContainsOnly(string $type, string $haystackAttributeName, $haystackClassOrObject, ?bool $isNativeType = \null, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertCount(int $expectedCount, $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable
     * that is stored in an attribute.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeCount(int $expectedCount, string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotCount(int $expectedCount, $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable
     * that is stored in an attribute.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotCount(int $expectedCount, string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertEquals($expected, $actual, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = \false, bool $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that a variable is equal to an attribute of an object.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeEquals($expected, string $actualAttributeName, $actualClassOrObject, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = \false, bool $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that two variables are not equal.
     *
     * @param float $delta
     * @param int   $maxDepth
     * @param bool  $canonicalize
     * @param bool  $ignoreCase
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotEquals($expected, $actual, string $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that a variable is not equal to an attribute of an object.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotEquals($expected, string $actualAttributeName, $actualClassOrObject, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = \false, bool $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertEmpty($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a static attribute of a class or an attribute of an object
     * is empty.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeEmpty(string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotEmpty($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a static attribute of a class or an attribute of an object
     * is not empty.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotEmpty(string $haystackAttributeName, $haystackClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertGreaterThan($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is greater than another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeGreaterThan($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertGreaterThanOrEqual($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is greater than or equal to another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeGreaterThanOrEqual($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertLessThan($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is smaller than another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeLessThan($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertLessThanOrEqual($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is smaller than or equal to another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeLessThanOrEqual($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileEquals(string $expected, string $actual, string $message = '', bool $canonicalize = \false, bool $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileNotEquals(string $expected, string $actual, string $message = '', bool $canonicalize = \false, bool $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = \false, bool $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = \false, bool $ignoreCase = \false) : void
    {
    }
    /**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertIsReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotIsReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertIsWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotIsWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertDirectoryExists(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertDirectoryNotExists(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertDirectoryIsReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertDirectoryNotIsReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertDirectoryIsWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertDirectoryNotIsWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileExists(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileNotExists(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileIsReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileNotIsReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileIsWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFileNotIsWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertTrue($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotTrue($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFalse($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotFalse($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNull($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotNull($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertFinite($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertInfinite($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNan($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a class has a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertClassHasAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class does not have a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertClassNotHasAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class has a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class does not have a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that an object has a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertObjectHasAttribute(string $attributeName, $object, string $message = '') : void
    {
    }
    /**
     * Asserts that an object does not have a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertObjectNotHasAttribute(string $attributeName, $object, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertSame($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable and an attribute of an object have the same type
     * and value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeSame($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotSame($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable and an attribute of an object do not have the
     * same type and value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotSame($expected, string $actualAttributeName, $actualClassOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertInstanceOf(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeInstanceOf(string $expected, string $attributeName, $classOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotInstanceOf(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotInstanceOf(string $expected, string $attributeName, $classOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertInternalType(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeInternalType(string $expected, string $attributeName, $classOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotInternalType(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertAttributeNotInternalType(string $expected, string $attributeName, $classOrObject, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertRegExp(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotRegExp(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertSameSize($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertNotSameSize($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringMatchesFormat(string $format, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringNotMatchesFormat(string $format, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts with a given prefix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringStartsWith(string $prefix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringStartsNotWith($prefix, $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringEndsWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends not with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertStringEndsNotWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertXmlStringEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertXmlStringNotEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertXmlStringEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that a hierarchy of DOMElements matches.
     *
     * @throws AssertionFailedError
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertEqualXMLStructure(\DOMElement $expectedElement, \DOMElement $actualElement, bool $checkAttributes = \false, string $message = '') : void
    {
    }
    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertThat($value, \PHPUnit\Framework\Constraint\Constraint $constraint, string $message = '') : void
    {
    }
    /**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertJson(string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    function logicalAnd() : \PHPUnit\Framework\Constraint\LogicalAnd
    {
    }
    function logicalOr() : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    function logicalNot(\PHPUnit\Framework\Constraint\Constraint $constraint) : \PHPUnit\Framework\Constraint\LogicalNot
    {
    }
    function logicalXor() : \PHPUnit\Framework\Constraint\LogicalXor
    {
    }
    function anything() : \PHPUnit\Framework\Constraint\IsAnything
    {
    }
    function isTrue() : \PHPUnit\Framework\Constraint\IsTrue
    {
    }
    function callback(callable $callback) : \PHPUnit\Framework\Constraint\Callback
    {
    }
    function isFalse() : \PHPUnit\Framework\Constraint\IsFalse
    {
    }
    function isJson() : \PHPUnit\Framework\Constraint\IsJson
    {
    }
    function isNull() : \PHPUnit\Framework\Constraint\IsNull
    {
    }
    function isFinite() : \PHPUnit\Framework\Constraint\IsFinite
    {
    }
    function isInfinite() : \PHPUnit\Framework\Constraint\IsInfinite
    {
    }
    function isNan() : \PHPUnit\Framework\Constraint\IsNan
    {
    }
    function attribute(\PHPUnit\Framework\Constraint\Constraint $constraint, string $attributeName) : \PHPUnit\Framework\Constraint\Attribute
    {
    }
    function contains($value, bool $checkForObjectIdentity = \true, bool $checkForNonObjectIdentity = \false) : \PHPUnit\Framework\Constraint\TraversableContains
    {
    }
    function containsOnly(string $type) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    function containsOnlyInstancesOf(string $className) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    function arrayHasKey($key) : \PHPUnit\Framework\Constraint\ArrayHasKey
    {
    }
    function equalTo($value, float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = \false, bool $ignoreCase = \false) : \PHPUnit\Framework\Constraint\IsEqual
    {
    }
    function attributeEqualTo(string $attributeName, $value, float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = \false, bool $ignoreCase = \false) : \PHPUnit\Framework\Constraint\Attribute
    {
    }
    function isEmpty() : \PHPUnit\Framework\Constraint\IsEmpty
    {
    }
    function isWritable() : \PHPUnit\Framework\Constraint\IsWritable
    {
    }
    function isReadable() : \PHPUnit\Framework\Constraint\IsReadable
    {
    }
    function directoryExists() : \PHPUnit\Framework\Constraint\DirectoryExists
    {
    }
    function fileExists() : \PHPUnit\Framework\Constraint\FileExists
    {
    }
    function greaterThan($value) : \PHPUnit\Framework\Constraint\GreaterThan
    {
    }
    function greaterThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    function classHasAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasAttribute
    {
    }
    function classHasStaticAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasStaticAttribute
    {
    }
    function objectHasAttribute($attributeName) : \PHPUnit\Framework\Constraint\ObjectHasAttribute
    {
    }
    function identicalTo($value) : \PHPUnit\Framework\Constraint\IsIdentical
    {
    }
    function isInstanceOf(string $className) : \PHPUnit\Framework\Constraint\IsInstanceOf
    {
    }
    function isType(string $type) : \PHPUnit\Framework\Constraint\IsType
    {
    }
    function lessThan($value) : \PHPUnit\Framework\Constraint\LessThan
    {
    }
    function lessThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    function matchesRegularExpression(string $pattern) : \PHPUnit\Framework\Constraint\RegularExpression
    {
    }
    function matches(string $string) : \PHPUnit\Framework\Constraint\StringMatchesFormatDescription
    {
    }
    function stringStartsWith($prefix) : \PHPUnit\Framework\Constraint\StringStartsWith
    {
    }
    function stringContains(string $string, bool $case = \true) : \PHPUnit\Framework\Constraint\StringContains
    {
    }
    function stringEndsWith(string $suffix) : \PHPUnit\Framework\Constraint\StringEndsWith
    {
    }
    function countOf(int $count) : \PHPUnit\Framework\Constraint\Count
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */
    function any() : \PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is never executed.
     */
    function never() : \PHPUnit\Framework\MockObject\Matcher\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     *
     * @param int $requiredInvocations
     */
    function atLeast($requiredInvocations) : \PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed at least once.
     */
    function atLeastOnce() : \PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastOnce
    {
    }
    /**
     * Returns a matcher that matches when the method is executed exactly once.
     */
    function once() : \PHPUnit\Framework\MockObject\Matcher\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     *
     * @param int $count
     */
    function exactly($count) : \PHPUnit\Framework\MockObject\Matcher\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     *
     * @param int $allowedInvocations
     */
    function atMost($allowedInvocations) : \PHPUnit\Framework\MockObject\Matcher\InvokedAtMostCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at the given index.
     *
     * @param int $index
     */
    function at($index) : \PHPUnit\Framework\MockObject\Matcher\InvokedAtIndex
    {
    }
    function returnValue($value) : \PHPUnit\Framework\MockObject\Stub\ReturnStub
    {
    }
    function returnValueMap(array $valueMap) : \PHPUnit\Framework\MockObject\Stub\ReturnValueMap
    {
    }
    /**
     * @param int $argumentIndex
     */
    function returnArgument($argumentIndex) : \PHPUnit\Framework\MockObject\Stub\ReturnArgument
    {
    }
    function returnCallback($callback) : \PHPUnit\Framework\MockObject\Stub\ReturnCallback
    {
    }
    /**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     */
    function returnSelf() : \PHPUnit\Framework\MockObject\Stub\ReturnSelf
    {
    }
    function throwException(\Throwable $exception) : \PHPUnit\Framework\MockObject\Stub\Exception
    {
    }
    function onConsecutiveCalls() : \PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls
    {
    }
}