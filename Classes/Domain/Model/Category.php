<?php

namespace Clickstorm\CsMapsExtended\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;

/**
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Category extends \GeorgRinger\News\Domain\Model\Category
{
    /**
     * marker
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $gmeMarker;
    /**
     * imageSize
     *
     * @var bool
     */
    protected $gmeImageSize = false;
    /**
     * imageWidth
     *
     * @var int
     */
    protected $gmeImageWidth;
    /**
     * imageHeight
     *
     * @var int
     */
    protected $gmeImageHeight;

    /**
     * Returns the marker
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference gmeMarker
     */
    public function getGmeMarker()
    {
        return $this->gmeMarker;
    }

    /**
     * Sets the gmeMarker
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $gmeMarker
     */
    public function setGmeMarker(FileReference $gmeMarker)
    {
        $this->gmeMarker = $gmeMarker;
    }

    /**
     * Returns the imageSize
     *
     * @return bool $gmeImageSize
     */
    public function getGmeImageSize()
    {
        return $this->gmeImageSize;
    }

    /**
     * Returns the boolean state of imageSize
     *
     * @return bool
     */
    public function isGmeImageSize()
    {
        return $this->getGmeImageSize();
    }

    /**
     * Sets the imageSize
     *
     * @param bool $gmeImageSize
     */
    public function setGmeImageSize($gmeImageSize)
    {
        $this->gmeImageSize = $gmeImageSize;
    }

    /**
     * @return int
     */
    public function getGmeImageWidth()
    {
        return $this->gmeImageWidth;
    }

    /**
     * @param int $gmeImageWidth
     */
    public function setGmeImageWidth($gmeImageWidth)
    {
        $this->gmeImageWidth = $gmeImageWidth;
    }

    /**
     * @return int
     */
    public function getGmeImageHeight()
    {
        return $this->gmeImageHeight;
    }

    /**
     * @param int $gmeImageHeight
     */
    public function setGmeImageHeight($gmeImageHeight)
    {
        $this->gmeImageHeight = $gmeImageHeight;
    }
}
