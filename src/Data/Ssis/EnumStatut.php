<?php
namespace Cheetahmail\Data\Ssis;

class EnumStatut
{
    const __default = 'Creating';
    const Creating = 'Creating';
    const inProgress = 'inProgress';
    const error = 'error';
    const finish = 'finish';
    const Process = 'Process';
    const scenarioSuccess = 'scenarioSuccess';
    const scenarioFail = 'scenarioFail';
    const unknown = 'unknown';
}
