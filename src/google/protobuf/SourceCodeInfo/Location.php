<?php
/**
 * Generated by Protobuf protoc plugin.
 */


namespace google\protobuf\SourceCodeInfo;

/**
 * Protobuf message : Location
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="Location",
 *   package="google.protobuf.SourceCodeInfo",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="path",
 *       tag=1,
 *       type=5,
 *       label=3,
 *       pack=true
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="span",
 *       tag=2,
 *       type=5,
 *       label=3,
 *       pack=true
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="leading_comments",
 *       tag=3,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="trailing_comments",
 *       tag=4,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="leading_detached_comments",
 *       tag=6,
 *       type=9,
 *       label=3
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class Location extends \Protobuf\AbstractMessage
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
     * path repeated int32 = 1
     *
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $path = null;

    /**
     * span repeated int32 = 2
     *
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $span = null;

    /**
     * leading_comments optional string = 3
     *
     * @var string
     */
    protected $leading_comments = null;

    /**
     * trailing_comments optional string = 4
     *
     * @var string
     */
    protected $trailing_comments = null;

    /**
     * leading_detached_comments repeated string = 6
     *
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $leading_detached_comments = null;

    /**
     * Check if 'path' has a value
     *
     * @return bool
     */
    public function hasPathList()
    {
        return $this->path !== null;
    }

    /**
     * Get 'path' value
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPathList()
    {
        return $this->path;
    }

    /**
     * Set 'path' value
     *
     * @param \Doctrine\Common\Collections\Collection $value
     */
    public function setPathList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->path = $value;
    }

    /**
     * Add a new element to 'path'
     *
     * @param int $value
     */
    public function addPath($value)
    {
        $this->path[] = $value;
    }

    /**
     * Check if 'span' has a value
     *
     * @return bool
     */
    public function hasSpanList()
    {
        return $this->span !== null;
    }

    /**
     * Get 'span' value
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpanList()
    {
        return $this->span;
    }

    /**
     * Set 'span' value
     *
     * @param \Doctrine\Common\Collections\Collection $value
     */
    public function setSpanList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->span = $value;
    }

    /**
     * Add a new element to 'span'
     *
     * @param int $value
     */
    public function addSpan($value)
    {
        $this->span[] = $value;
    }

    /**
     * Check if 'leading_comments' has a value
     *
     * @return bool
     */
    public function hasLeadingComments()
    {
        return $this->leading_comments !== null;
    }

    /**
     * Get 'leading_comments' value
     *
     * @return string
     */
    public function getLeadingComments()
    {
        return $this->leading_comments;
    }

    /**
     * Set 'leading_comments' value
     *
     * @param string $value
     */
    public function setLeadingComments($value)
    {
        return $this->leading_comments = $value;
    }

    /**
     * Check if 'trailing_comments' has a value
     *
     * @return bool
     */
    public function hasTrailingComments()
    {
        return $this->trailing_comments !== null;
    }

    /**
     * Get 'trailing_comments' value
     *
     * @return string
     */
    public function getTrailingComments()
    {
        return $this->trailing_comments;
    }

    /**
     * Set 'trailing_comments' value
     *
     * @param string $value
     */
    public function setTrailingComments($value)
    {
        return $this->trailing_comments = $value;
    }

    /**
     * Check if 'leading_detached_comments' has a value
     *
     * @return bool
     */
    public function hasLeadingDetachedCommentsList()
    {
        return $this->leading_detached_comments !== null;
    }

    /**
     * Get 'leading_detached_comments' value
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLeadingDetachedCommentsList()
    {
        return $this->leading_detached_comments;
    }

    /**
     * Set 'leading_detached_comments' value
     *
     * @param \Doctrine\Common\Collections\Collection $value
     */
    public function setLeadingDetachedCommentsList(\Doctrine\Common\Collections\Collection $value)
    {
        return $this->leading_detached_comments = $value;
    }

    /**
     * Add a new element to 'leading_detached_comments'
     *
     * @param string $value
     */
    public function addLeadingDetachedComments($value)
    {
        $this->leading_detached_comments[] = $value;
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

        if ($this->path !== null) {
            $innerSize = 0;

            foreach ($this->path as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->span !== null) {
            $innerSize = 0;

            foreach ($this->span as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->leading_comments !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->leading_comments);
        }

        if ($this->trailing_comments !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->trailing_comments);
        }

        if ($this->leading_detached_comments !== null) {
            foreach ($this->leading_detached_comments as $val) {
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
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->path === null) {
                    $this->path = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->path->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->span === null) {
                    $this->span = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->span->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->leading_comments = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->trailing_comments = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->leading_detached_comments === null) {
                    $this->leading_detached_comments = new \Protobuf\ScalarCollection();
                }

                $this->leading_detached_comments->add($reader->readString($stream));

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

        if ($this->path !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->path as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->path as $val) {
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->span !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->span as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->span as $val) {
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->leading_comments !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->leading_comments);
        }

        if ($this->trailing_comments !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->trailing_comments);
        }

        if ($this->leading_detached_comments !== null) {
            foreach ($this->leading_detached_comments as $val) {
                $writer->writeVarint($stream, 50);
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
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createReadContext($stream);
        $message = new self();

        $message->readFrom($context);

        return $message;
    }


}

