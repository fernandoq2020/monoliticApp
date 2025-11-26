<?php

use Core\Validator;

test('Validates a string', function () {
    expect(Validator::string('foobar'))->ToBeTrue();
    expect(Validator::string(false))->ToBeFalse();
    expect(Validator::string(''))->ToBeFalse();
});


test('Validates a string with minimun lenght', function () {
    expect(Validator::string('foobar', 20))->ToBeFalse();
});

test('Validates an email', function () {
    expect(Validator::email('foobar@gmail.com'))->ToBeTrue();
    expect(Validator::email('foobar'))->ToBeFalse();
});

it('Validates that number is greater', function () {
    expect(Validator::greaterThan(10,1))->ToBeTrue();
    expect(Validator::greaterThan(1,10))->ToBeFalse();
})->only();