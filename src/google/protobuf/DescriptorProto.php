<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : descriptor.proto
 */


namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.DescriptorProto
 */
class DescriptorProto extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * name optional string = 1
     *
     * @var string
     */
    protected $name = null;

    /**
     * field repeated message = 2
     *
     * @var \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    protected $field = null;

    /**
     * extension repeated message = 6
     *
     * @var \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    protected $extension = null;

    /**
     * nested_type repeated message = 3
     *
     * @var \Protobuf\Collection<\google\protobuf\DescriptorProto>
     */
    protected $nested_type = null;

    /**
     * enum_type repeated message = 4
     *
     * @var \Protobuf\Collection<\google\protobuf\EnumDescriptorProto>
     */
    protected $enum_type = null;

    /**
     * extension_range repeated message = 5
     *
     * @var \Protobuf\Collection<\google\protobuf\DescriptorProto\ExtensionRange>
     */
    protected $extension_range = null;

    /**
     * oneof_decl repeated message = 8
     *
     * @var \Protobuf\Collection<\google\protobuf\OneofDescriptorProto>
     */
    protected $oneof_decl = null;

    /**
     * options optional message = 7
     *
     * @var \google\protobuf\MessageOptions
     */
    protected $options = null;

    /**
     * reserved_range repeated message = 9
     *
     * @var \Protobuf\Collection<\google\protobuf\DescriptorProto\ReservedRange>
     */
    protected $reserved_range = null;

    /**
     * reserved_name repeated string = 10
     *
     * @var \Protobuf\Collection
     */
    protected $reserved_name = null;

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
        $this->name = $value;
    }

    /**
     * Check if 'field' has a value
     *
     * @return bool
     */
    public function hasFieldList()
    {
        return $this->field !== null;
    }

    /**
     * Get 'field' value
     *
     * @return \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    public function getFieldList()
    {
        return $this->field;
    }

    /**
     * Set 'field' value
     *
     * @param \Protobuf\Collection<\google\protobuf\FieldDescriptorProto> $value
     */
    public function setFieldList(\Protobuf\Collection $value = null)
    {
        $this->field = $value;
    }

    /**
     * Add a new element to 'field'
     *
     * @param \google\protobuf\FieldDescriptorProto $value
     */
    public function addField(\google\protobuf\FieldDescriptorProto $value)
    {
        if ($this->field === null) {
            $this->field = new \Protobuf\MessageCollection();
        }

        $this->field->add($value);
    }

    /**
     * Check if 'extension' has a value
     *
     * @return bool
     */
    public function hasExtensionList()
    {
        return $this->extension !== null;
    }

    /**
     * Get 'extension' value
     *
     * @return \Protobuf\Collection<\google\protobuf\FieldDescriptorProto>
     */
    public function getExtensionList()
    {
        return $this->extension;
    }

    /**
     * Set 'extension' value
     *
     * @param \Protobuf\Collection<\google\protobuf\FieldDescriptorProto> $value
     */
    public function setExtensionList(\Protobuf\Collection $value = null)
    {
        $this->extension = $value;
    }

    /**
     * Add a new element to 'extension'
     *
     * @param \google\protobuf\FieldDescriptorProto $value
     */
    public function addExtension(\google\protobuf\FieldDescriptorProto $value)
    {
        if ($this->extension === null) {
            $this->extension = new \Protobuf\MessageCollection();
        }

        $this->extension->add($value);
    }

    /**
     * Check if 'nested_type' has a value
     *
     * @return bool
     */
    public function hasNestedTypeList()
    {
        return $this->nested_type !== null;
    }

    /**
     * Get 'nested_type' value
     *
     * @return \Protobuf\Collection<\google\protobuf\DescriptorProto>
     */
    public function getNestedTypeList()
    {
        return $this->nested_type;
    }

    /**
     * Set 'nested_type' value
     *
     * @param \Protobuf\Collection<\google\protobuf\DescriptorProto> $value
     */
    public function setNestedTypeList(\Protobuf\Collection $value = null)
    {
        $this->nested_type = $value;
    }

    /**
     * Add a new element to 'nested_type'
     *
     * @param \google\protobuf\DescriptorProto $value
     */
    public function addNestedType(\google\protobuf\DescriptorProto $value)
    {
        if ($this->nested_type === null) {
            $this->nested_type = new \Protobuf\MessageCollection();
        }

        $this->nested_type->add($value);
    }

    /**
     * Check if 'enum_type' has a value
     *
     * @return bool
     */
    public function hasEnumTypeList()
    {
        return $this->enum_type !== null;
    }

    /**
     * Get 'enum_type' value
     *
     * @return \Protobuf\Collection<\google\protobuf\EnumDescriptorProto>
     */
    public function getEnumTypeList()
    {
        return $this->enum_type;
    }

    /**
     * Set 'enum_type' value
     *
     * @param \Protobuf\Collection<\google\protobuf\EnumDescriptorProto> $value
     */
    public function setEnumTypeList(\Protobuf\Collection $value = null)
    {
        $this->enum_type = $value;
    }

    /**
     * Add a new element to 'enum_type'
     *
     * @param \google\protobuf\EnumDescriptorProto $value
     */
    public function addEnumType(\google\protobuf\EnumDescriptorProto $value)
    {
        if ($this->enum_type === null) {
            $this->enum_type = new \Protobuf\MessageCollection();
        }

        $this->enum_type->add($value);
    }

    /**
     * Check if 'extension_range' has a value
     *
     * @return bool
     */
    public function hasExtensionRangeList()
    {
        return $this->extension_range !== null;
    }

    /**
     * Get 'extension_range' value
     *
     * @return \Protobuf\Collection<\google\protobuf\DescriptorProto\ExtensionRange>
     */
    public function getExtensionRangeList()
    {
        return $this->extension_range;
    }

    /**
     * Set 'extension_range' value
     *
     * @param \Protobuf\Collection<\google\protobuf\DescriptorProto\ExtensionRange> $value
     */
    public function setExtensionRangeList(\Protobuf\Collection $value = null)
    {
        $this->extension_range = $value;
    }

    /**
     * Add a new element to 'extension_range'
     *
     * @param \google\protobuf\DescriptorProto\ExtensionRange $value
     */
    public function addExtensionRange(\google\protobuf\DescriptorProto\ExtensionRange $value)
    {
        if ($this->extension_range === null) {
            $this->extension_range = new \Protobuf\MessageCollection();
        }

        $this->extension_range->add($value);
    }

    /**
     * Check if 'oneof_decl' has a value
     *
     * @return bool
     */
    public function hasOneofDeclList()
    {
        return $this->oneof_decl !== null;
    }

    /**
     * Get 'oneof_decl' value
     *
     * @return \Protobuf\Collection<\google\protobuf\OneofDescriptorProto>
     */
    public function getOneofDeclList()
    {
        return $this->oneof_decl;
    }

    /**
     * Set 'oneof_decl' value
     *
     * @param \Protobuf\Collection<\google\protobuf\OneofDescriptorProto> $value
     */
    public function setOneofDeclList(\Protobuf\Collection $value = null)
    {
        $this->oneof_decl = $value;
    }

    /**
     * Add a new element to 'oneof_decl'
     *
     * @param \google\protobuf\OneofDescriptorProto $value
     */
    public function addOneofDecl(\google\protobuf\OneofDescriptorProto $value)
    {
        if ($this->oneof_decl === null) {
            $this->oneof_decl = new \Protobuf\MessageCollection();
        }

        $this->oneof_decl->add($value);
    }

    /**
     * Check if 'options' has a value
     *
     * @return bool
     */
    public function hasOptions()
    {
        return $this->options !== null;
    }

    /**
     * Get 'options' value
     *
     * @return \google\protobuf\MessageOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set 'options' value
     *
     * @param \google\protobuf\MessageOptions $value
     */
    public function setOptions(\google\protobuf\MessageOptions $value = null)
    {
        $this->options = $value;
    }

    /**
     * Check if 'reserved_range' has a value
     *
     * @return bool
     */
    public function hasReservedRangeList()
    {
        return $this->reserved_range !== null;
    }

    /**
     * Get 'reserved_range' value
     *
     * @return \Protobuf\Collection<\google\protobuf\DescriptorProto\ReservedRange>
     */
    public function getReservedRangeList()
    {
        return $this->reserved_range;
    }

    /**
     * Set 'reserved_range' value
     *
     * @param \Protobuf\Collection<\google\protobuf\DescriptorProto\ReservedRange> $value
     */
    public function setReservedRangeList(\Protobuf\Collection $value = null)
    {
        $this->reserved_range = $value;
    }

    /**
     * Add a new element to 'reserved_range'
     *
     * @param \google\protobuf\DescriptorProto\ReservedRange $value
     */
    public function addReservedRange(\google\protobuf\DescriptorProto\ReservedRange $value)
    {
        if ($this->reserved_range === null) {
            $this->reserved_range = new \Protobuf\MessageCollection();
        }

        $this->reserved_range->add($value);
    }

    /**
     * Check if 'reserved_name' has a value
     *
     * @return bool
     */
    public function hasReservedNameList()
    {
        return $this->reserved_name !== null;
    }

    /**
     * Get 'reserved_name' value
     *
     * @return \Protobuf\Collection
     */
    public function getReservedNameList()
    {
        return $this->reserved_name;
    }

    /**
     * Set 'reserved_name' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setReservedNameList(\Protobuf\Collection $value = null)
    {
        $this->reserved_name = $value;
    }

    /**
     * Add a new element to 'reserved_name'
     *
     * @param string $value
     */
    public function addReservedName($value)
    {
        if ($this->reserved_name === null) {
            $this->reserved_name = new \Protobuf\ScalarCollection();
        }

        $this->reserved_name->add($value);
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'name' => null,
            'field' => [],
            'extension' => [],
            'nested_type' => [],
            'enum_type' => [],
            'extension_range' => [],
            'oneof_decl' => [],
            'options' => null,
            'reserved_range' => [],
            'reserved_name' => []
        ], $values);

        $message->setName($values['name']);
        $message->setOptions($values['options']);

        foreach ($values['field'] as $item) {
            $message->addField($item);
        }

        foreach ($values['extension'] as $item) {
            $message->addExtension($item);
        }

        foreach ($values['nested_type'] as $item) {
            $message->addNestedType($item);
        }

        foreach ($values['enum_type'] as $item) {
            $message->addEnumType($item);
        }

        foreach ($values['extension_range'] as $item) {
            $message->addExtensionRange($item);
        }

        foreach ($values['oneof_decl'] as $item) {
            $message->addOneofDecl($item);
        }

        foreach ($values['reserved_range'] as $item) {
            $message->addReservedRange($item);
        }

        foreach ($values['reserved_name'] as $item) {
            $message->addReservedName($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DescriptorProto',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'field',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.google.protobuf.FieldDescriptorProto'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'extension',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.google.protobuf.FieldDescriptorProto'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'nested_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.google.protobuf.DescriptorProto'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'enum_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.google.protobuf.EnumDescriptorProto'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'extension_range',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.google.protobuf.DescriptorProto.ExtensionRange'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'oneof_decl',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.google.protobuf.OneofDescriptorProto'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'options',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.google.protobuf.MessageOptions'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'reserved_range',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.google.protobuf.DescriptorProto.ReservedRange'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'reserved_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->name);
        }

        if ($this->field !== null) {
            foreach ($this->field as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->extension !== null) {
            foreach ($this->extension as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->nested_type !== null) {
            foreach ($this->nested_type as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->enum_type !== null) {
            foreach ($this->enum_type as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->extension_range !== null) {
            foreach ($this->extension_range as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->oneof_decl !== null) {
            foreach ($this->oneof_decl as $val) {
                $writer->writeVarint($stream, 66);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->options !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->options->serializedSize($sizeContext));
            $this->options->writeTo($context);
        }

        if ($this->reserved_range !== null) {
            foreach ($this->reserved_range as $val) {
                $writer->writeVarint($stream, 74);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->reserved_name !== null) {
            foreach ($this->reserved_name as $val) {
                $writer->writeVarint($stream, 82);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\FieldDescriptorProto();

                if ($this->field === null) {
                    $this->field = new \Protobuf\MessageCollection();
                }

                $this->field->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\FieldDescriptorProto();

                if ($this->extension === null) {
                    $this->extension = new \Protobuf\MessageCollection();
                }

                $this->extension->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\DescriptorProto();

                if ($this->nested_type === null) {
                    $this->nested_type = new \Protobuf\MessageCollection();
                }

                $this->nested_type->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\EnumDescriptorProto();

                if ($this->enum_type === null) {
                    $this->enum_type = new \Protobuf\MessageCollection();
                }

                $this->enum_type->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\DescriptorProto\ExtensionRange();

                if ($this->extension_range === null) {
                    $this->extension_range = new \Protobuf\MessageCollection();
                }

                $this->extension_range->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\OneofDescriptorProto();

                if ($this->oneof_decl === null) {
                    $this->oneof_decl = new \Protobuf\MessageCollection();
                }

                $this->oneof_decl->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\MessageOptions();

                $this->options = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\DescriptorProto\ReservedRange();

                if ($this->reserved_range === null) {
                    $this->reserved_range = new \Protobuf\MessageCollection();
                }

                $this->reserved_range->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->reserved_name === null) {
                    $this->reserved_name = new \Protobuf\ScalarCollection();
                }

                $this->reserved_name->add($reader->readString($stream));

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->field !== null) {
            foreach ($this->field as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->extension !== null) {
            foreach ($this->extension as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->nested_type !== null) {
            foreach ($this->nested_type as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->enum_type !== null) {
            foreach ($this->enum_type as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->extension_range !== null) {
            foreach ($this->extension_range as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->oneof_decl !== null) {
            foreach ($this->oneof_decl as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->options !== null) {
            $innerSize = $this->options->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->reserved_range !== null) {
            foreach ($this->reserved_range as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->reserved_name !== null) {
            foreach ($this->reserved_name as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->name = null;
        $this->field = null;
        $this->extension = null;
        $this->nested_type = null;
        $this->enum_type = null;
        $this->extension_range = null;
        $this->oneof_decl = null;
        $this->options = null;
        $this->reserved_range = null;
        $this->reserved_name = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \google\protobuf\DescriptorProto) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->name = $message->name ?: $this->name;
        $this->field = $message->field ?: $this->field;
        $this->extension = $message->extension ?: $this->extension;
        $this->nested_type = $message->nested_type ?: $this->nested_type;
        $this->enum_type = $message->enum_type ?: $this->enum_type;
        $this->extension_range = $message->extension_range ?: $this->extension_range;
        $this->oneof_decl = $message->oneof_decl ?: $this->oneof_decl;
        $this->options = $message->options ?: $this->options;
        $this->reserved_range = $message->reserved_range ?: $this->reserved_range;
        $this->reserved_name = $message->reserved_name ?: $this->reserved_name;
    }


}

