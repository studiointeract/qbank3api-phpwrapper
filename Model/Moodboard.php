<?php

namespace QBNK\QBank\API\Model;

use \DateTime;
use \Exception;


/**
 * 
 *
 * NOTE: This class is auto generated. Do not edit the class manually.
 *
 */

class Moodboard implements \JsonSerializable  {



	/**
	 * The Moodboard identifier
	 * @var int
	 */
	protected $id;

	/**
	 * The pincode used to access this Moodboard.
	 * @var string
	 */
	protected $pinCode;

	/**
	 * The template used by the Moodboard.
	 * @var int
	 */
	protected $templateId;

	/**
	 * The date and time this Moodboard expires.
	 * @var DateTime
	 */
	protected $expireDate;

	/**
	 * Enduser hash used to identify this moodboard.
	 * @var string
	 */
	protected $hash;

	/**
	 * A Key/Value Object containing specific template related settings.
	 * @var Object
	 */
	protected $definition;

	/**
	 * The base Object identifier.
	 * @var int
	 */
	protected $objectId;

	/**
	 * The Objects name.
	 * @var string
	 */
	protected $name;

	/**
	 * When the Object was created.
	 * @var DateTime
	 */
	protected $created;

	/**
	 * The identifier of the User who created the Object.
	 * @var int
	 */
	protected $createdBy;

	/**
	 * When the Object was updated.
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * Which user who updated the Object.
	 * @var int
	 */
	protected $updatedBy;

	/**
	 * Whether the object is deleted.
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * The objects PropertySets.
	 * @var PropertySet[]
	 */
	protected $propertySets;

	/**
	 * Whether the object has been modified since constructed.
	 * @var boolean
	 */
	protected $dirty;

	/**
	 * The identifier of the ObjectType describing the propertysets this object should use.
	 * @var int
	 */
	protected $typeId;


	/**
	 * Constructs a {@link Moodboard }.
	 * @param array $parameters An array of parameters to initialize the {@link Moodboard } with.
	 * - <b>id</b> - The Moodboard identifier
	 * - <b>pinCode</b> - The pincode used to access this Moodboard.
	 * - <b>templateId</b> - The template used by the Moodboard.
	 * - <b>expireDate</b> - The date and time this Moodboard expires.
	 * - <b>hash</b> - Enduser hash used to identify this moodboard.
	 * - <b>definition</b> - A Key/Value Object containing specific template related settings.
	 * - <b>objectId</b> - The base Object identifier.
	 * - <b>name</b> - The Objects name.
	 * - <b>created</b> - When the Object was created.
	 * - <b>createdBy</b> - The identifier of the User who created the Object.
	 * - <b>updated</b> - When the Object was updated.
	 * - <b>updatedBy</b> - Which user who updated the Object.
	 * - <b>deleted</b> - Whether the object is deleted.
	 * - <b>propertySets</b> - The objects PropertySets.
	 * - <b>dirty</b> - Whether the object has been modified since constructed.
	 * - <b>typeId</b> - The identifier of the ObjectType describing the propertysets this object should use.
	 * 
	 */
	public function __construct($parameters) {
		
		$this->propertySets = array();
		
		
		if (isset($parameters['id'])) {
			$this->setId($parameters['id']);
		}
	
		if (isset($parameters['pinCode'])) {
			$this->setPinCode($parameters['pinCode']);
		}
	
		if (isset($parameters['templateId'])) {
			$this->setTemplateId($parameters['templateId']);
		}
	
		if (isset($parameters['expireDate'])) {
			$this->setExpireDate($parameters['expireDate']);
		}
	
		if (isset($parameters['hash'])) {
			$this->setHash($parameters['hash']);
		}
	
		if (isset($parameters['definition'])) {
			$this->setDefinition($parameters['definition']);
		}
	
		if (isset($parameters['objectId'])) {
			$this->setObjectId($parameters['objectId']);
		}
	
		if (isset($parameters['name'])) {
			$this->setName($parameters['name']);
		}
	
		if (isset($parameters['created'])) {
			$this->setCreated($parameters['created']);
		}
	
		if (isset($parameters['createdBy'])) {
			$this->setCreatedBy($parameters['createdBy']);
		}
	
		if (isset($parameters['updated'])) {
			$this->setUpdated($parameters['updated']);
		}
	
		if (isset($parameters['updatedBy'])) {
			$this->setUpdatedBy($parameters['updatedBy']);
		}
	
		if (isset($parameters['deleted'])) {
			$this->setDeleted($parameters['deleted']);
		}
	
		if (isset($parameters['propertySets'])) {
			$this->setPropertySets($parameters['propertySets']);
		}
	
		if (isset($parameters['dirty'])) {
			$this->setDirty($parameters['dirty']);
		}
	
		if (isset($parameters['typeId'])) {
			$this->setTypeId($parameters['typeId']);
		}
	
	}


	/**
	 * Gets the id of the Moodboard
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the pinCode of the Moodboard
	 * @return string
	 */
	public function getPinCode() {
		return $this->pinCode;
	}

	/**
	 * Gets the templateId of the Moodboard
	 * @return int
	 */
	public function getTemplateId() {
		return $this->templateId;
	}

	/**
	 * Gets the expireDate of the Moodboard
	 * @return date
	 */
	public function getExpireDate() {
		return $this->expireDate;
	}

	/**
	 * Gets the hash of the Moodboard
	 * @return string
	 */
	public function getHash() {
		return $this->hash;
	}

	/**
	 * Gets the definition of the Moodboard
	 * @return Object
	 */
	public function getDefinition() {
		return $this->definition;
	}

	/**
	 * Gets the objectId of the Moodboard
	 * @return int
	 */
	public function getObjectId() {
		return $this->objectId;
	}

	/**
	 * Gets the name of the Moodboard
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the created of the Moodboard
	 * @return date
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Gets the createdBy of the Moodboard
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Gets the updated of the Moodboard
	 * @return date
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Gets the updatedBy of the Moodboard
	 * @return int
	 */
	public function getUpdatedBy() {
		return $this->updatedBy;
	}

	/**
	 * Gets the deleted of the Moodboard
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * Gets a property from the first available PropertySet
	 * @param string $systemName The system name of the property to get.
	 * @throws QBankApiException Thrown if the requested property does not exist.
	 * @return Property
	 */
	public function getProperty($systemName) {
		foreach ($this->propertySets as $propertySet) {
			foreach ($propertySet->getProperties() as $property) {
				if ($property->getPropertyType()->getSystemName() == $systemName) {
					return $property;
				}
			}
		}
		throw new QBankApiException('No Property with the system name "'.$systemName.'" exists.');
	}
	/**
	 * Gets the propertySets of the Moodboard
	 * @return PropertySet[]
	 */
	public function getPropertySets() {
		return $this->propertySets;
	}

	/**
	 * Gets the dirty of the Moodboard
	 * @return boolean
	 */
	public function getDirty() {
		return $this->dirty;
	}

	/**
	 * Gets the typeId of the Moodboard
	 * @return int
	 */
	public function getTypeId() {
		return $this->typeId;
	}



	/**
	 * Sets the "id" of the Moodboard
	 * @param int $id
	 * @return $this
	 */
	protected function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the "pinCode" of the Moodboard
	 * @param string $pinCode
	 * @return $this
	 */
	protected function setPinCode($pinCode) {
		$this->pinCode = $pinCode;
		return $this;
	}

	/**
	 * Sets the "templateId" of the Moodboard
	 * @param int $templateId
	 * @return $this
	 */
	protected function setTemplateId($templateId) {
		$this->templateId = $templateId;
		return $this;
	}

	/**
	 * Sets the "expireDate" of the Moodboard
	 * @param DateTime $expireDate
	 * @return $this
	 */
	protected function setExpireDate($expireDate) {
		if ($expireDate instanceOf DateTime) {
			$this->expireDate = $expireDate;
		} else {
			try {
				$this->expireDate = new DateTime($expireDate);
			} catch (Exception $e) {
				$this->expireDate = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "hash" of the Moodboard
	 * @param string $hash
	 * @return $this
	 */
	protected function setHash($hash) {
		$this->hash = $hash;
		return $this;
	}

	/**
	 * Sets the "definition" of the Moodboard
	 * @param Object $definition
	 * @return $this
	 */
	protected function setDefinition($definition) {
		$this->definition = $definition;
		return $this;
	}

	/**
	 * Sets the "objectId" of the Moodboard
	 * @param int $objectId
	 * @return $this
	 */
	protected function setObjectId($objectId) {
		$this->objectId = $objectId;
		return $this;
	}

	/**
	 * Sets the "name" of the Moodboard
	 * @param string $name
	 * @return $this
	 */
	protected function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Sets the "created" of the Moodboard
	 * @param DateTime $created
	 * @return $this
	 */
	protected function setCreated($created) {
		if ($created instanceOf DateTime) {
			$this->created = $created;
		} else {
			try {
				$this->created = new DateTime($created);
			} catch (Exception $e) {
				$this->created = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "createdBy" of the Moodboard
	 * @param int $createdBy
	 * @return $this
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
		return $this;
	}

	/**
	 * Sets the "updated" of the Moodboard
	 * @param DateTime $updated
	 * @return $this
	 */
	protected function setUpdated($updated) {
		if ($updated instanceOf DateTime) {
			$this->updated = $updated;
		} else {
			try {
				$this->updated = new DateTime($updated);
			} catch (Exception $e) {
				$this->updated = null;
			}
		}
		return $this;
	}

	/**
	 * Sets the "updatedBy" of the Moodboard
	 * @param int $updatedBy
	 * @return $this
	 */
	protected function setUpdatedBy($updatedBy) {
		$this->updatedBy = $updatedBy;
		return $this;
	}

	/**
	 * Sets the "deleted" of the Moodboard
	 * @param boolean $deleted
	 * @return $this
	 */
	protected function setDeleted($deleted) {
		$this->deleted = (bool)$deleted;
		return $this;
	}

	/**
	 * Sets the "propertySets" of the Moodboard
	 * @param PropertySet[] $propertySets
	 * @return $this
	 */
	protected function setPropertySets($propertySets) {
		if (is_array($propertySets)) {
			$this->propertySets = array();
			foreach ($propertySets as $item) {
				if (!($item instanceof PropertySet)) {
					if (is_array($item)) {
						try {
							$item = new PropertySet($item);
						} catch (\Exception $e) {
							trigger_error('Could not auto-instantiate PropertySet. '.$e->getMessage(), E_USER_WARNING);
						}
					} else {
						trigger_error('Array parameter item is not of expected type "PropertySet"!', E_USER_WARNING);
						continue;
					}
				}
				$this->propertySets[] = $item;
			}
		}
		return $this;
	}

	/**
	 * Sets the "dirty" of the Moodboard
	 * @param boolean $dirty
	 * @return $this
	 */
	protected function setDirty($dirty) {
		$this->dirty = (bool)$dirty;
		return $this;
	}

	/**
	 * Sets the "typeId" of the Moodboard
	 * @param int $typeId
	 * @return $this
	 */
	protected function setTypeId($typeId) {
		$this->typeId = $typeId;
		return $this;
	}


	/**
	 * Gets all data that should be available in a json representation.
	 * @return array An associative array of the available variables.
	 */
	public function jsonSerialize() {
		$array = array();
		
		if ($this->id !== null) {
			$array['id'] = $this->id;
		}
		if ($this->pinCode !== null) {
			$array['pinCode'] = $this->pinCode;
		}
		if ($this->templateId !== null) {
			$array['templateId'] = $this->templateId;
		}
		if ($this->expireDate !== null) {
			$array['expireDate'] = $this->expireDate;
		}
		if ($this->hash !== null) {
			$array['hash'] = $this->hash;
		}
		if ($this->definition !== null) {
			$array['definition'] = $this->definition;
		}
		if ($this->objectId !== null) {
			$array['objectId'] = $this->objectId;
		}
		if ($this->name !== null) {
			$array['name'] = $this->name;
		}
		if ($this->created !== null) {
			$array['created'] = $this->created;
		}
		if ($this->createdBy !== null) {
			$array['createdBy'] = $this->createdBy;
		}
		if ($this->updated !== null) {
			$array['updated'] = $this->updated;
		}
		if ($this->updatedBy !== null) {
			$array['updatedBy'] = $this->updatedBy;
		}
		if ($this->deleted !== null) {
			$array['deleted'] = $this->deleted;
		}
		if ($this->propertySets !== null) {
			$array['propertySets'] = $this->propertySets;
		}
		if ($this->dirty !== null) {
			$array['dirty'] = $this->dirty;
		}
		if ($this->typeId !== null) {
			$array['typeId'] = $this->typeId;
		}
		return $array;
	}
}