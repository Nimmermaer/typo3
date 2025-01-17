.. include:: /Includes.rst.txt

.. _breaking-101291-1688740732:

==================================================
Breaking: #101291 - Introduce capabilities bit set
==================================================

See :issue:`101291`

Description
===========

The capabilities property of ResourceStorage and Drivers (LocalDriver/AbstractDriver) have been converted from an integer (holding a bit value) to an instance of a new BitSet class Capabilities.

This affects the public api of the following interface methods:

- :php:`\TYPO3\CMS\Core\Resource\Driver\DriverInterface::getCapabilities()`
- :php:`\TYPO3\CMS\Core\Resource\Driver\DriverInterface::mergeConfigurationCapabilities()`

In consequence, all mentioned methods of implementations are affected as well, those of:

- :php:`\TYPO3\CMS\Core\Resource\Driver\AbstractDriver::getCapabilities()`
- :php:`\TYPO3\CMS\Core\Resource\Driver\LocalDriver::mergeConfigurationCapabilities()`

Also the following constants have been removed:

- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_BROWSABLE`
- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_PUBLIC`
- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_WRITABLE`
- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_HIERARCHICAL_IDENTIFIERS`


Impact
======

The return type of the following methods, respective their implementations have changed from :php`int` to :php:`Capabilities`:

- :php:`\TYPO3\CMS\Core\Resource\Driver\DriverInterface::getCapabilities()`
- :php:`\TYPO3\CMS\Core\Resource\Driver\DriverInterface::mergeConfigurationCapabilities()`

The type of param :php:`$capabilities` of method :php:`mergeConfigurationCapabilities()` has been changed from :php:`int` to :php:`Capabilities`.

The usage of the mentioned, removed constants of :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface` will lead to errors.


Affected installations
======================

Installations that implement custom drivers and therefore directly implement :php:` \TYPO3\CMS\Core\Resource\Driver\DriverInterface` or extend :php:`\TYPO3\CMS\Core\Resource\Driver\AbstractDriver`.

Also, installations that use the removed constants of :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface`


Migration
=========

When using mentioned methods that formerly returned the bit value as integer or expected the bit value as integer param do need to use the Capabilities class instead. It behaves exactly the same as the plain integer. If the plain integer value needs to be retreived, :php:`__toInt()` can be called on :php:`Capabilities` instances.

The following removed constants

- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_BROWSABLE`
- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_PUBLIC`
- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_WRITABLE`
- :php:`\TYPO3\CMS\Core\Resource\ResourceStorageInterface::CAPABILITY_HIERARCHICAL_IDENTIFIERS`

can be replaced with public constants of the new Capabilites class:

- :php`\TYPO3\CMS\Core\Resource\Capabilities::CAPABILITY_BROWSABLE`
- :php`\TYPO3\CMS\Core\Resource\Capabilities::CAPABILITY_PUBLIC`
- :php`\TYPO3\CMS\Core\Resource\Capabilities::CAPABILITY_WRITABLE`
- :php`\TYPO3\CMS\Core\Resource\Capabilities::CAPABILITY_HIERARCHICAL_IDENTIFIERS`

.. index:: FAL, PHP-API, NotScanned, ext:core
