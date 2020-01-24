<?php
/**
 * This file contains deprecated class aliases for classes that were renamed in 3.0.
 *
 * For now, the old class names are automatically available through the aliases in this file.
 *
 * In the future (likely 3.3 or 3.4), the deprecated class aliases will no longer be automatically included.
 * If you still need the deprecated aliases after that, you can manually include this file in legacy code.
 */

class_alias(\xPDO\xPDO::class, \xPDO::class);
class_alias(\xPDO\Om\xPDOCriteria::class, \xPDOCriteria::class);
class_alias(\xPDO\Om\xPDOSimpleObject::class, \xPDOSimpleObject::class);
class_alias(\xPDO\Om\xPDOQuery::class, \xPDOQuery::class);
class_alias(\xPDO\Om\xPDOObject::class, \xPDOObject::class);
class_alias(\xPDO\Cache\xPDOCacheManager::class, \xPDOCacheManager::class);
class_alias(\xPDO\Cache\xPDOFileCache::class, \xPDOFileCache::class);
class_alias(\xPDO\Transport\xPDOTransport::class, \xPDOTransport::class);
class_alias(\xPDO\Transport\xPDOObjectVehicle::class, \xPDOObjectVehicle::class);

class_alias(\MODX\Revolution\modX::class, \modX::class);

// Processors
class_alias(\MODX\Revolution\Processors\Processor::class, \modProcessor::class);
class_alias(\MODX\Revolution\Processors\ModelProcessor::class, \modObjectProcessor::class);
class_alias(\MODX\Revolution\Processors\DriverSpecificProcessor::class, \modDriverSpecificProcessor::class);
class_alias(\MODX\Revolution\Processors\ProcessorResponse::class, \modProcessorResponse::class);
class_alias(\MODX\Revolution\Processors\ProcessorResponseError::class, \modProcessorResponseError::class);
class_alias(\MODX\Revolution\Processors\Model\CreateProcessor::class, \modObjectCreateProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\DuplicateProcessor::class, \modObjectDuplicateProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\ExportProcessor::class, \modObjectExportProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\GetListProcessor::class, \modObjectGetListProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\GetProcessor::class, \modObjectGetProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\ImportProcessor::class, \modObjectImportProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\RemoveProcessor::class, \modObjectRemoveProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\SoftRemoveProcessor::class, \modObjectSoftRemoveProcessor::class);
class_alias(\MODX\Revolution\Processors\Model\UpdateProcessor::class, \modObjectUpdateProcessor::class);
class_alias(\MODX\Revolution\modParsedManagerController::class, \modParsedManagerController::class);

class_alias(\MODX\Revolution\modExtraManagerController::class, \modExtraManagerController::class);
class_alias(\MODX\Revolution\modResource::class, \modResource::class);