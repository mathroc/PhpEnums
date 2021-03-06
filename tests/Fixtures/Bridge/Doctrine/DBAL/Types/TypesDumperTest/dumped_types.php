<?php

namespace ELAO_ENUM_DT\Foo\Bar {

    if (!\class_exists(\ELAO_ENUM_DT\Foo\Bar\BazType::class)) {
        class BazType extends \Elao\Enum\Bridge\Doctrine\DBAL\Types\AbstractEnumType
        {
            const NAME = 'baz';

            protected function getEnumClass(): string
            {
                return \Foo\Bar\Baz::class;
            }

            public function getName(): string
            {
                return static::NAME;
            }
        }
    }

    if (!\class_exists(\ELAO_ENUM_DT\Foo\Bar\XyzType::class)) {
        class XyzType extends \Elao\Enum\Bridge\Doctrine\DBAL\Types\AbstractEnumSQLDeclarationType
        {
            const NAME = 'xyz';

            protected function getEnumClass(): string
            {
                return \Foo\Bar\Xyz::class;
            }

            public function getName(): string
            {
                return static::NAME;
            }
        }
    }

    if (!\class_exists(\ELAO_ENUM_DT\Foo\Bar\QuxType::class)) {
        class QuxType extends \Elao\Enum\Bridge\Doctrine\DBAL\Types\AbstractIntegerEnumType
        {
            const NAME = 'qux';

            protected function getEnumClass(): string
            {
                return \Foo\Bar\Qux::class;
            }

            public function getName(): string
            {
                return static::NAME;
            }
        }
    }

}

namespace ELAO_ENUM_DT\Foo\Baz {

    if (!\class_exists(\ELAO_ENUM_DT\Foo\Baz\FooType::class)) {
        class FooType extends \Elao\Enum\Bridge\Doctrine\DBAL\Types\AbstractIntegerEnumType
        {
            const NAME = 'foo';

            protected function getEnumClass(): string
            {
                return \Foo\Baz\Foo::class;
            }

            public function getName(): string
            {
                return static::NAME;
            }
        }
    }

}
