<?php
/**
 * Generated by Protobuf protoc plugin.
 */


namespace google\protobuf;

/**
 * Protobuf message : FileDescriptorProto
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="FileDescriptorProto",
 *   package="google.protobuf",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="name",
 *       tag=1,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="package",
 *       tag=2,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="dependency",
 *       tag=3,
 *       type=9,
 *       label=3
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="public_dependency",
 *       tag=10,
 *       type=5,
 *       label=3
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="weak_dependency",
 *       tag=11,
 *       type=5,
 *       label=3
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="message_type",
 *       tag=4,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.DescriptorProto"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="enum_type",
 *       tag=5,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.EnumDescriptorProto"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="service",
 *       tag=6,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.ServiceDescriptorProto"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="extension",
 *       tag=7,
 *       type=11,
 *       label=3,
 *       reference="google.protobuf.FieldDescriptorProto"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="options",
 *       tag=8,
 *       type=11,
 *       label=1,
 *       reference="google.protobuf.FileOptions"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="source_code_info",
 *       tag=9,
 *       type=11,
 *       label=1,
 *       reference="google.protobuf.SourceCodeInfo"
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="syntax",
 *       tag=12,
 *       type=9,
 *       label=1
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class FileDescriptorProto extends \Protobuf\AbstractMessage
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
     * package optional string = 2
     *
     * @var string
     */
    protected $package = null;

    /**
     * dependency repeated string = 3
     *
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $dependency = null;

    /**
     * public_dependency repeated int32 = 10
     *
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $public_dependency = null;

    /**
     * weak_dependency repeated int32 = 11
     *
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $weak_dependency = null;

    /**
     * message_type repeated message = 4
     *
     * @var \Doctrine\Common\Collections\Collection<"\google\protobuf\DescriptorProto">
     */
    protected $message_type = null;

    /**
     * enum_type repeated message = 5
     *
     * @var \Doctrine\Common\Collections\Collection<"\google\protobuf\EnumDescriptorProto">
     */
    protected $enum_type = null;

    /**
     * service repeated message = 6
     *
     * @var \Doctrine\Common\Collections\Collection<"\google\protobuf\ServiceDescriptorProto">
     */
    protected $service = null;

    /**
     * extension repeated message = 7
     *
     * @var \Doctrine\Common\Collections\Collection<"\google\protobuf\FieldDescriptorProto">
     */
    protected $extension = null;

    /**
     * options optional message = 8
     *
     * @var \google\protobuf\FileOptions
     */
    protected $options = null;

    /**
     * source_code_info optional message = 9
     *
     * @var \google\protobuf\SourceCodeInfo
     */
    protected $source_code_info = null;

    /**
     * syntax optional string = 12
     *
     * @var string
     */
    protected $syntax = null;

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
    public function setName($value)
    {
        return $this->name = $value;
    }

    /**
     * Check if 'package' has a value
     *
     * @return bool
     */
    public function hasPackage()
    {
        return $this->package !== null;
    }

    /**
     * Get 'package' value
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set 'package' value
     *
     * @param string $value
     */
    public function setPackage($value)
    {
        return $this->package = $value;
    }

    /**
     * Check if 'dependency' has a value
     *
     * @return bool
     */
    public function hasDependencyList()
    {
        return $this->dependency !== null;
    }

    /**
     * Get 'dependency' value
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDependencyList()
    {
        return $this->dependency;
    }

    /**
     * Set 'dependency' value
     *
     * @param \Doctrine\Common\Collections\Collection $value
     */
    public function setDependencyList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->dependency = $value;
    }

    /**
     * Add a new element to 'dependency'
     *
     * @param string $value
     */
    public function addDependency($value)
    {
        $this->dependency[] = $value;
    }

    /**
     * Check if 'public_dependency' has a value
     *
     * @return bool
     */
    public function hasPublicDependencyList()
    {
        return $this->public_dependency !== null;
    }

    /**
     * Get 'public_dependency' value
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPublicDependencyList()
    {
        return $this->public_dependency;
    }

    /**
     * Set 'public_dependency' value
     *
     * @param \Doctrine\Common\Collections\Collection $value
     */
    public function setPublicDependencyList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->public_dependency = $value;
    }

    /**
     * Add a new element to 'public_dependency'
     *
     * @param int $value
     */
    public function addPublicDependency($value)
    {
        $this->public_dependency[] = $value;
    }

    /**
     * Check if 'weak_dependency' has a value
     *
     * @return bool
     */
    public function hasWeakDependencyList()
    {
        return $this->weak_dependency !== null;
    }

    /**
     * Get 'weak_dependency' value
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWeakDependencyList()
    {
        return $this->weak_dependency;
    }

    /**
     * Set 'weak_dependency' value
     *
     * @param \Doctrine\Common\Collections\Collection $value
     */
    public function setWeakDependencyList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->weak_dependency = $value;
    }

    /**
     * Add a new element to 'weak_dependency'
     *
     * @param int $value
     */
    public function addWeakDependency($value)
    {
        $this->weak_dependency[] = $value;
    }

    /**
     * Check if 'message_type' has a value
     *
     * @return bool
     */
    public function hasMessageTypeList()
    {
        return $this->message_type !== null;
    }

    /**
     * Get 'message_type' value
     *
     * @return \Doctrine\Common\Collections\Collection<"\google\protobuf\DescriptorProto">
     */
    public function getMessageTypeList()
    {
        return $this->message_type;
    }

    /**
     * Set 'message_type' value
     *
     * @param \Doctrine\Common\Collections\Collection<"\google\protobuf\DescriptorProto"> $value
     */
    public function setMessageTypeList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->message_type = $value;
    }

    /**
     * Add a new element to 'message_type'
     *
     * @param \google\protobuf\DescriptorProto $value
     */
    public function addMessageType(\google\protobuf\DescriptorProto $value)
    {
        $this->message_type[] = $value;
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
     * @return \Doctrine\Common\Collections\Collection<"\google\protobuf\EnumDescriptorProto">
     */
    public function getEnumTypeList()
    {
        return $this->enum_type;
    }

    /**
     * Set 'enum_type' value
     *
     * @param \Doctrine\Common\Collections\Collection<"\google\protobuf\EnumDescriptorProto"> $value
     */
    public function setEnumTypeList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->enum_type = $value;
    }

    /**
     * Add a new element to 'enum_type'
     *
     * @param \google\protobuf\EnumDescriptorProto $value
     */
    public function addEnumType(\google\protobuf\EnumDescriptorProto $value)
    {
        $this->enum_type[] = $value;
    }

    /**
     * Check if 'service' has a value
     *
     * @return bool
     */
    public function hasServiceList()
    {
        return $this->service !== null;
    }

    /**
     * Get 'service' value
     *
     * @return \Doctrine\Common\Collections\Collection<"\google\protobuf\ServiceDescriptorProto">
     */
    public function getServiceList()
    {
        return $this->service;
    }

    /**
     * Set 'service' value
     *
     * @param \Doctrine\Common\Collections\Collection<"\google\protobuf\ServiceDescriptorProto"> $value
     */
    public function setServiceList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->service = $value;
    }

    /**
     * Add a new element to 'service'
     *
     * @param \google\protobuf\ServiceDescriptorProto $value
     */
    public function addService(\google\protobuf\ServiceDescriptorProto $value)
    {
        $this->service[] = $value;
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
     * @return \Doctrine\Common\Collections\Collection<"\google\protobuf\FieldDescriptorProto">
     */
    public function getExtensionList()
    {
        return $this->extension;
    }

    /**
     * Set 'extension' value
     *
     * @param \Doctrine\Common\Collections\Collection<"\google\protobuf\FieldDescriptorProto"> $value
     */
    public function setExtensionList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->extension = $value;
    }

    /**
     * Add a new element to 'extension'
     *
     * @param \google\protobuf\FieldDescriptorProto $value
     */
    public function addExtension(\google\protobuf\FieldDescriptorProto $value)
    {
        $this->extension[] = $value;
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
     * @return \google\protobuf\FileOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set 'options' value
     *
     * @param \google\protobuf\FileOptions $value
     */
    public function setOptions(\google\protobuf\FileOptions $value)
    {
        return $this->options = $value;
    }

    /**
     * Check if 'source_code_info' has a value
     *
     * @return bool
     */
    public function hasSourceCodeInfo()
    {
        return $this->source_code_info !== null;
    }

    /**
     * Get 'source_code_info' value
     *
     * @return \google\protobuf\SourceCodeInfo
     */
    public function getSourceCodeInfo()
    {
        return $this->source_code_info;
    }

    /**
     * Set 'source_code_info' value
     *
     * @param \google\protobuf\SourceCodeInfo $value
     */
    public function setSourceCodeInfo(\google\protobuf\SourceCodeInfo $value)
    {
        return $this->source_code_info = $value;
    }

    /**
     * Check if 'syntax' has a value
     *
     * @return bool
     */
    public function hasSyntax()
    {
        return $this->syntax !== null;
    }

    /**
     * Get 'syntax' value
     *
     * @return string
     */
    public function getSyntax()
    {
        return $this->syntax;
    }

    /**
     * Set 'syntax' value
     *
     * @param string $value
     */
    public function setSyntax($value)
    {
        return $this->syntax = $value;
    }

    /**
     * Get unknown values
     *
     * @return \Protobuf\UnknownFieldSet
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Protobuf\Extension\ExtensionFieldMap
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
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->package !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->package);
        }

        if ($this->dependency !== null) {
            foreach ($this->dependency as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->public_dependency !== null) {
            foreach ($this->public_dependency as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->weak_dependency !== null) {
            foreach ($this->weak_dependency as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->message_type !== null) {
            foreach ($this->message_type as $val) {
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

        if ($this->service !== null) {
            foreach ($this->service as $val) {
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

        if ($this->options !== null) {
            $innerSize = $this->options->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->source_code_info !== null) {
            $innerSize = $this->source_code_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->syntax !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->syntax);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->package = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->dependency === null) {
                    $this->dependency = new \Protobuf\ScalarCollection();
                }

                $this->dependency->add($reader->readString($stream));

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                if ($this->public_dependency === null) {
                    $this->public_dependency = new \Protobuf\ScalarCollection();
                }

                $this->public_dependency->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                if ($this->weak_dependency === null) {
                    $this->weak_dependency = new \Protobuf\ScalarCollection();
                }

                $this->weak_dependency->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\DescriptorProto();

                if ($this->message_type === null) {
                    $this->message_type = new \Protobuf\MessageCollection();
                }

                $this->message_type->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
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

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\ServiceDescriptorProto();

                if ($this->service === null) {
                    $this->service = new \Protobuf\MessageCollection();
                }

                $this->service->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
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

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\FileOptions();

                $this->options = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\SourceCodeInfo();

                $this->source_code_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->syntax = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->put($extension, $extension->readFrom($context, $wire));

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
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->name);
        }

        if ($this->package !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->package);
        }

        if ($this->dependency !== null) {
            foreach ($this->dependency as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->public_dependency !== null) {
            foreach ($this->public_dependency as $val) {
                $writer->writeVarint($stream, 80);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->weak_dependency !== null) {
            foreach ($this->weak_dependency as $val) {
                $writer->writeVarint($stream, 88);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->message_type !== null) {
            foreach ($this->message_type as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->enum_type !== null) {
            foreach ($this->enum_type as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->service !== null) {
            foreach ($this->service as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->extension !== null) {
            foreach ($this->extension as $val) {
                $writer->writeVarint($stream, 58);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->options !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->options->serializedSize($sizeContext));
            $this->options->writeTo($context);
        }

        if ($this->source_code_info !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->source_code_info->serializedSize($sizeContext));
            $this->source_code_info->writeTo($context);
        }

        if ($this->syntax !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeString($stream, $this->syntax);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createReadContext($stream);
        $message = new self();

        $message->readFrom($context);

        return $message;
    }


}

