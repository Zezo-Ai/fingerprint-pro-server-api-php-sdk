<?php

namespace Fingerprint\ServerSdk\Test\Model;

use Fingerprint\ServerSdk\Model\ProxyDetails;
use Fingerprint\ServerSdk\ObjectSerializer;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
#[CoversClass(ProxyDetails::class)]
class ProxyDetailsTest extends TestCase
{
    private const EXAMPLE = [
        'proxy_type' => ProxyDetails::PROXY_TYPE_RESIDENTIAL,
        'last_seen_at' => 1700000000,
        'provider' => 'example',
    ];

    private const PROXY_TYPE_VALUES = [
        'residential',
        'data_center',
        'unknown',
    ];

    /**
     * Constructor without arguments should initialize all properties to null.
     */
    public function testConstructorDefaults(): void
    {
        $model = new ProxyDetails();

        $this->assertNull($model->getProxyType());
        $this->assertNull($model->getLastSeenAt());
        $this->assertNull($model->getProvider());
    }

    /**
     * Constructor should accept an array and populate the properties.
     */
    public function testConstructorWithData(): void
    {
        $model = new ProxyDetails(self::EXAMPLE);

        $this->assertEquals(self::EXAMPLE['proxy_type'], $model->getProxyType());
        $this->assertEquals(self::EXAMPLE['last_seen_at'], $model->getLastSeenAt());
        $this->assertEquals(self::EXAMPLE['provider'], $model->getProvider());
    }

    /**
     * Setters should return the model instance for chaining.
     */
    public function testSettersReturnSelf(): void
    {
        $model = new ProxyDetails();

        $this->assertSame($model, $model->setProxyType(self::EXAMPLE['proxy_type']));
        $this->assertSame($model, $model->setLastSeenAt(self::EXAMPLE['last_seen_at']));
        $this->assertSame($model, $model->setProvider(self::EXAMPLE['provider']));
    }

    /**
     * setProxyType should accept unknown enum values without throwing.
     */
    public function testSetProxyTypeAcceptsUnknownValue(): void
    {
        $model = new ProxyDetails();

        $model->setProxyType('invalid');
        $this->assertEquals('invalid', $model->getProxyType());
    }

    /**
     * getProxyTypeAllowableValues should return all defined proxy_type constants.
     */
    public function testProxyTypeAllowableValues(): void
    {
        $model = new ProxyDetails();
        $allowable = $model->getProxyTypeAllowableValues();

        foreach (self::PROXY_TYPE_VALUES as $value) {
            $this->assertContains($value, $allowable);
        }
        $this->assertCount(count(self::PROXY_TYPE_VALUES), $allowable);
    }

    /**
     * Serialization should preserve all property values.
     *
     * @throws \DateMalformedStringException
     */
    public function testSerialization(): void
    {
        $model = new ProxyDetails(self::EXAMPLE);

        $json = json_encode(ObjectSerializer::sanitizeForSerialization($model));
        $deserialized = ObjectSerializer::deserialize(json_decode($json), ProxyDetails::class);

        $this->assertEquals($model->getProxyType(), $deserialized->getProxyType());
        $this->assertEquals($model->getLastSeenAt(), $deserialized->getLastSeenAt());
        $this->assertEquals($model->getProvider(), $deserialized->getProvider());
    }

    /**
     * ArrayAccess interface should allow bracket notation for getting and setting properties.
     *
     * @noinspection PhpConditionAlreadyCheckedInspection
     */
    public function testArrayAccess(): void
    {
        $model = new ProxyDetails();

        $model['proxy_type'] = ProxyDetails::PROXY_TYPE_DATA_CENTER;
        $this->assertEquals(ProxyDetails::PROXY_TYPE_DATA_CENTER, $model['proxy_type']);
        $this->assertTrue(isset($model['proxy_type']));

        unset($model['proxy_type']);
        $this->assertNull($model['proxy_type']);
    }

    /**
     * A fully populated model should be valid; a default-constructed model should not.
     */
    public function testValidation(): void
    {
        $emptyModel = new ProxyDetails();
        $this->assertFalse($emptyModel->valid());
        $this->assertNotEmpty($emptyModel->listInvalidProperties());

        $validModel = new ProxyDetails(self::EXAMPLE);
        $this->assertTrue($validModel->valid());
        $this->assertEmpty($validModel->listInvalidProperties());
    }

    /**
     * __toString should return a pretty-printed JSON representation.
     */
    public function testToString(): void
    {
        $model = new ProxyDetails(self::EXAMPLE);
        $string = (string) $model;

        $decoded = json_decode($string, true);
        $this->assertEquals(self::EXAMPLE['proxy_type'], $decoded['proxy_type']);
        $this->assertEquals(self::EXAMPLE['last_seen_at'], $decoded['last_seen_at']);
        $this->assertEquals(self::EXAMPLE['provider'], $decoded['provider']);
    }

    /**
     * isNullableSetToNull should return false for non-nullable fields.
     */
    public function testIsNullableSetToNull(): void
    {
        $model = new ProxyDetails(self::EXAMPLE);

        $this->assertFalse($model->isNullableSetToNull('proxy_type'));
        $this->assertFalse($model->isNullableSetToNull('last_seen_at'));
        $this->assertFalse($model->isNullableSetToNull('provider'));
    }

    /**
     * getModelName should return the OpenAPI model name.
     */
    public function testGetModelName(): void
    {
        $model = new ProxyDetails();

        $this->assertEquals('ProxyDetails', $model->getModelName());
    }

    /**
     * listInvalidProperties should not report unknown enum values.
     */
    public function testListInvalidPropertiesAcceptsUnknownEnumValues(): void
    {
        $model = new ProxyDetails(self::EXAMPLE);

        $model['proxy_type'] = 'not_a_valid_proxy_type';

        $invalid = $model->listInvalidProperties();

        $enumErrors = array_filter($invalid, fn ($msg) => str_contains($msg, 'invalid value'));
        $this->assertEmpty($enumErrors, 'Unknown enum values should not produce invalid properties');
    }

    /**
     * offsetSet with null offset should append the value to the container.
     */
    public function testOffsetSetWithNullKey(): void
    {
        $model = new ProxyDetails();

        $model[] = 'appended_value';
        $this->assertEquals('appended_value', $model[0]);
    }

    /**
     * jsonSerialize should return the sanitized representation used by json_encode.
     */
    public function testJsonSerialize(): void
    {
        $model = new ProxyDetails(self::EXAMPLE);
        $serialized = $model->jsonSerialize();

        $this->assertIsObject($serialized);
        $this->assertEquals(self::EXAMPLE['proxy_type'], $serialized->proxy_type);
        $this->assertEquals(self::EXAMPLE['provider'], $serialized->provider);
    }

    /**
     * toHeaderValue should return a compact JSON string.
     */
    public function testToHeaderValue(): void
    {
        $model = new ProxyDetails(self::EXAMPLE);
        $header = $model->toHeaderValue();

        $decoded = json_decode($header, true);
        $this->assertIsArray($decoded);
        $this->assertEquals(self::EXAMPLE['proxy_type'], $decoded['proxy_type']);
        $this->assertStringNotContainsString("\n", $header);
    }

    /**
     * Constructor with null value for a non-nullable field should still store null (default path of setIfExists).
     */
    public function testSetIfExistsWithNullOnNonNullableField(): void
    {
        $data = self::EXAMPLE;
        $data['proxy_type'] = null;

        $model = new ProxyDetails($data);

        $this->assertNull($model->getProxyType());
        $this->assertFalse($model->isNullableSetToNull('proxy_type'));
    }

    /**
     * Deserializing a JSON response with an unknown proxy_type should not throw.
     * The unknown value should be preserved through deserialization and re-serialization.
     *
     * @throws \DateMalformedStringException
     */
    public function testDeserializationWithUnknownProxyType(): void
    {
        $json = json_encode([
            'proxy_type' => 'corporate',
            'last_seen_at' => 1700000000,
            'provider' => 'example',
        ]);

        /** @var ProxyDetails $model */
        $model = ObjectSerializer::deserialize(json_decode($json), ProxyDetails::class);

        $this->assertEquals('corporate', $model->getProxyType());
        $this->assertEquals(1700000000, $model->getLastSeenAt());
        $this->assertEquals('example', $model->getProvider());
        $this->assertTrue($model->valid());

        // Re-serialization should preserve the unknown value
        $reserialized = json_encode(ObjectSerializer::sanitizeForSerialization($model));
        $decoded = json_decode($reserialized, true);
        $this->assertEquals('corporate', $decoded['proxy_type']);
    }
}
