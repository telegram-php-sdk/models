<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class EncryptedPassportElementType
 * @package Infureal\Telegram\Enums
 *
 * @method static EncryptedPassportElementType PERSONAL_DETAILS()
 * @method static EncryptedPassportElementType PASSPORT()
 * @method static EncryptedPassportElementType DRIVE_LICENSE()
 * @method static EncryptedPassportElementType IDENTITY_CARD()
 * @method static EncryptedPassportElementType INTERNAL_PASSPORT()
 * @method static EncryptedPassportElementType ADDRESS()
 * @method static EncryptedPassportElementType UTILITY_BILL()
 * @method static EncryptedPassportElementType BANK_STATEMENT()
 * @method static EncryptedPassportElementType RENTAL_AGREEMENT()
 * @method static EncryptedPassportElementType PASSPORT_REGISTRATION()
 * @method static EncryptedPassportElementType TEMPORARY_REGISTRATION()
 * @method static EncryptedPassportElementType PHONE_NUMBER()
 * @method static EncryptedPassportElementType EMAIL()
 */
class EncryptedPassportElementType extends Enum {

    protected const PERSONAL_DETAILS = 'personal_details';
    protected const PASSPORT = 'passport';
    protected const DRIVE_LICENSE = 'driver_license';
    protected const IDENTITY_CARD = 'identity_card';
    protected const INTERNAL_PASSPORT = 'internal_passport';
    protected const ADDRESS = 'address';
    protected const UTILITY_BILL = 'utility_bill';
    protected const BANK_STATEMENT = 'bank_statement';
    protected const RENTAL_AGREEMENT = 'rental_agreement';
    protected const PASSPORT_REGISTRATION = 'passport_registration';
    protected const TEMPORARY_REGISTRATION = 'temporary_registration';
    protected const PHONE_NUMBER = 'phone_number';
    protected const EMAIL = 'email';

}