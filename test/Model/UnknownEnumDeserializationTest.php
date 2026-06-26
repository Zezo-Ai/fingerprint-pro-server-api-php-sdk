<?php

namespace Fingerprint\ServerSdk\Test\Model;

use Fingerprint\ServerSdk\Model\BotInfo;
use Fingerprint\ServerSdk\Model\Error;
use Fingerprint\ServerSdk\Model\Event;
use Fingerprint\ServerSdk\Model\EventRuleAction;
use Fingerprint\ServerSdk\Model\Proximity;
use Fingerprint\ServerSdk\Model\ProxyDetails;
use Fingerprint\ServerSdk\Model\SDK;
use Fingerprint\ServerSdk\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Tests that all enum types accept values not yet defined in the SDK.
 * This ensures the SDK does not break when the API introduces new enum values.
 *
 * @internal
 *
 * @coversNothing
 */
class UnknownEnumDeserializationTest extends TestCase
{
    private const UNRECOGNIZED_VALUE = 'unrecognized_value_for_test';

    // ── Standalone enums (referenced via openAPITypes) ──────────────

    /**
     * @throws \DateMalformedStringException
     */
    public function testEventWithUnknownIncrementalIdentificationStatus(): void
    {
        $json = json_encode([
            'event_id' => 'evt_1',
            'timestamp' => 1700000000,
            'incremental_identification_status' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var Event $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Event::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getIncrementalIdentificationStatus());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['incremental_identification_status']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testEventWithUnknownBotResult(): void
    {
        $json = json_encode([
            'event_id' => 'evt_1',
            'timestamp' => 1700000000,
            'bot' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var Event $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Event::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getBot());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['bot']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testEventWithUnknownProxyConfidence(): void
    {
        $json = json_encode([
            'event_id' => 'evt_1',
            'timestamp' => 1700000000,
            'proxy_confidence' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var Event $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Event::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getProxyConfidence());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['proxy_confidence']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testEventWithUnknownTamperingConfidence(): void
    {
        $json = json_encode([
            'event_id' => 'evt_1',
            'timestamp' => 1700000000,
            'tampering_confidence' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var Event $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Event::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getTamperingConfidence());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['tampering_confidence']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testEventWithUnknownVpnConfidence(): void
    {
        $json = json_encode([
            'event_id' => 'evt_1',
            'timestamp' => 1700000000,
            'vpn_confidence' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var Event $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Event::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getVpnConfidence());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['vpn_confidence']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testEventWithUnknownRareDevicePercentileBucket(): void
    {
        $json = json_encode([
            'event_id' => 'evt_1',
            'timestamp' => 1700000000,
            'rare_device_percentile_bucket' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var Event $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Event::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getRareDevicePercentileBucket());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['rare_device_percentile_bucket']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testEventRuleActionWithUnknownRuleActionType(): void
    {
        $json = json_encode([
            'ruleset_id' => 'rs_1',
            'rule_id' => 'r_1',
            'rule_expression' => 'true',
            'type' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var EventRuleAction $model */
        $model = ObjectSerializer::deserialize(json_decode($json), EventRuleAction::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getType());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['type']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testErrorWithUnknownErrorCode(): void
    {
        $json = json_encode([
            'code' => self::UNRECOGNIZED_VALUE,
            'message' => 'Something went wrong',
        ]);

        /** @var Error $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Error::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getCode());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['code']);
    }

    // ── Inline enums (string properties with allowable values) ──────

    /**
     * @throws \DateMalformedStringException
     */
    public function testProxyDetailsWithUnknownProxyType(): void
    {
        $json = json_encode([
            'proxy_type' => self::UNRECOGNIZED_VALUE,
            'last_seen_at' => 1700000000,
            'provider' => 'example',
        ]);

        /** @var ProxyDetails $model */
        $model = ObjectSerializer::deserialize(json_decode($json), ProxyDetails::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getProxyType());
        $this->assertTrue($model->valid());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['proxy_type']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testBotInfoWithUnknownIdentity(): void
    {
        $json = json_encode([
            'category' => 'other',
            'provider' => 'example',
            'name' => 'TestBot',
            'identity' => self::UNRECOGNIZED_VALUE,
            'confidence' => 'high',
        ]);

        /** @var BotInfo $model */
        $model = ObjectSerializer::deserialize(json_decode($json), BotInfo::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getIdentity());
        $this->assertTrue($model->valid());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['identity']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testBotInfoWithUnknownConfidence(): void
    {
        $json = json_encode([
            'category' => 'other',
            'provider' => 'example',
            'name' => 'TestBot',
            'identity' => 'verified',
            'confidence' => self::UNRECOGNIZED_VALUE,
        ]);

        /** @var BotInfo $model */
        $model = ObjectSerializer::deserialize(json_decode($json), BotInfo::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getConfidence());
        $this->assertTrue($model->valid());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['confidence']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testSDKWithUnknownPlatform(): void
    {
        $json = json_encode([
            'platform' => self::UNRECOGNIZED_VALUE,
            'version' => '1.0.0',
        ]);

        /** @var SDK $model */
        $model = ObjectSerializer::deserialize(json_decode($json), SDK::class);

        $this->assertSame(self::UNRECOGNIZED_VALUE, $model->getPlatform());
        $this->assertTrue($model->valid());
        $this->assertSame(self::UNRECOGNIZED_VALUE, $this->reserialize($model)['platform']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    public function testProximityWithUnknownPrecisionRadius(): void
    {
        $json = json_encode([
            'id' => 'prox_1',
            'precision_radius' => 999,
            'confidence' => 0.95,
        ]);

        /** @var Proximity $model */
        $model = ObjectSerializer::deserialize(json_decode($json), Proximity::class);

        $this->assertSame(999, $model->getPrecisionRadius());
        $this->assertTrue($model->valid());
        $this->assertSame(999, $this->reserialize($model)['precision_radius']);
    }

    /**
     * Helper: serialize a model to an associative array (simulating a JSON round-trip).
     */
    private function reserialize(object $model): array
    {
        return json_decode(
            json_encode(ObjectSerializer::sanitizeForSerialization($model)),
            true,
        );
    }
}
