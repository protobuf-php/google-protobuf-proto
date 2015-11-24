<?php
/**
 * Generated by Protobuf protoc plugin.
 */


namespace google\protobuf\DescriptorProto;

/**
 * Protobuf message : ExtensionRange
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="ExtensionRange",
 *   package="google.protobuf.DescriptorProto",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="start",
 *       tag=1,
 *       type=5,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="end",
 *       tag=2,
 *       type=5,
 *       label=1
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class ExtensionRange extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * start optional int32 = 1
     *
     * @var int
     */
    protected $start = null;

    /**
     * end optional int32 = 2
     *
     * @var int
     */
    protected $end = null;

    /**
     * Check if 'start' has a value
     *
     * @return bool
     */
    public function hasStart()
    {
        return $this->start !== null;
    }

    /**
     * Get 'start' value
     *
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set 'start' value
     *
     * @param int $value
     */
    public function setStart($value)
    {
        return $this->start = $value;
    }

    /**
     * Check if 'end' has a value
     *
     * @return bool
     */
    public function hasEnd()
    {
        return $this->end !== null;
    }

    /**
     * Get 'end' value
     *
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set 'end' value
     *
     * @param int $value
     */
    public function setEnd($value)
    {
        return $this->end = $value;
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
     * @return \Protobuf\ExtensionFieldMap
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->start !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start);
        }

        if ($this->end !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->end);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->start = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->end = $reader->readVarint($stream);

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

        if ($this->start !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->start);
        }

        if ($this->end !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->end);
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
        $message = new \google\protobuf\DescriptorProto\ExtensionRange();

        $message->readFrom($context);

        return $message;
    }


}

