<?php

/**
 * @file classes/spotlight/Spotlight.inc.php
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Spotlight
 * @ingroup spotlight
 * @see SpotlightDAO
 *
 * @brief Basic class describing a spotlight.
 */

// location constants for spotlights
define('SPOTLIGHT_LOCATION_HOMEPAGE',	1);
define('SPOTLIGHT_LOCATION_SIDEBAR',	2);

// type constants for spotlights
define('SPOTLIGHT_TYPE_BOOK',	3);
define('SPOTLIGHT_TYPE_SERIES',	4);
define('SPOTLIGHT_TYPE_AUTHOR',	5);

class Spotlight extends DataObject {
	/**
	 * Constructor
	 */
	function Spotlight() {
		parent::DataObject();
	}

	//
	// Get/set methods
	//

	/**
	 * Get assoc ID for this spotlight.
	 * @return int
	 */
	function getAssocId() {
		return $this->getData('assocId');
	}

	/**
	 * Set assoc ID for this spotlight.
	 * @param $assocId int
	 */
	function setAssocId($assocId) {
		return $this->setData('assocId', $assocId);
	}

	/**
	 * Get assoc type for this spotlight.
	 * @return int
	 */
	function getAssocType() {
		return $this->getData('assocType');
	}

	/**
	 * Set assoc type for this spotlight.
	 * @param $assocType int
	 */
	function setAssocType($assocType) {
		return $this->setData('assocType', $assocType);
	}

	/**
	 * Get the press id for this spotlight.
	 * @return int
	 */
	function getPressId() {
		return $this->getData('pressId');
	}

	/**
	 * Set press Id for this spotlight.
	 * @param $pressId int
	 */
	function setPressId($pressId) {
		return $this->setData('pressId', $pressId);
	}

	/**
	 * Get localized spotlight title
	 * @return string
	 */
	function getLocalizedTitle() {
		return $this->getLocalizedData('title');
	}

	/**
	 * Get spotlight title.
	 * @param $locale
	 * @return string
	 */
	function getTitle($locale) {
		return $this->getData('title', $locale);
	}

	/**
	 * Set spotlight title.
	 * @param $title string
	 * @param $locale string
	 */
	function setTitle($title, $locale) {
		return $this->setData('title', $title, $locale);
	}

	/**
	 * Get spotlight location (sidebar or homepage).
	 * @return string
	 */
	function getLocation() {
		return $this->getData('location');
	}

	/**
	 * Set spotlight location.
	 * @param $location string
	 */
	function setLocation($location) {
		return $this->setData('location', $location);
	}

	/**
	 * Get localized full description
	 * @return string
	 */
	function getLocalizedDescription() {
		return $this->getLocalizedData('description');
	}

	/**
	 * Get spotlight description.
	 * @param $locale string
	 * @return string
	 */
	function getDescription($locale) {
		return $this->getData('description', $locale);
	}

	/**
	 * Set spotlight description.
	 * @param $description string
	 * @param $locale string
	 */
	function setDescription($description, $locale) {
		return $this->setData('description', $description, $locale);
	}

	/**
	 * Fetch a plain text (localized) string for this Spotlight type
	 * @return string
	 */
	function getLocalizedType() {
		$spotlightTypes = array(
				SPOTLIGHT_TYPE_BOOK => __('grid.content.spotlights.form.type.book'),
				SPOTLIGHT_TYPE_SERIES => __('series.series'),
				SPOTLIGHT_TYPE_AUTHOR => __('user.role.author')
		);

		return $spotlightTypes[$this->getAssocType()];
	}
}

?>