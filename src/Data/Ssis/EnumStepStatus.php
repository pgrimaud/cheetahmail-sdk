<?php
namespace Cheetahmail\Data\Ssis;

class EnumStepStatus
{
    const __default = 'Creating';
    const Creating = 'Creating';
    const Starting = 'Starting';
    const Errors = 'Errors';
    const OK = 'OK';
    const Processing = 'Processing';
}
