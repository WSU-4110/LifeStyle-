/* methods being tested are creating with a caption,
 empty value in a caption, valid email address,
  invalid email address, and passwords */
<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CreatePostTest extends TestCase
{
    public function testCanBeCreatedWithCaption(): void
    {
        $this->assertInstanceOf(
            Caption::class,
            Caption::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromEmptyCaption(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Caption::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'This is an example caption',
            Caption::fromString('This is a dummy caption')
        );
    }
}
<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PasswordTest extends TestCase
{
    public function testCanBeCreatedFromValidPassword(): void
    {
        $this->assertInstanceOf(
            Password::class,
            Password::fromString('anything')
        );
    }

    public function testCannotBeCreatedFromInvalidPassword(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Password::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'Password',
            Password::fromString('ThisPass')
        );
    }
}
