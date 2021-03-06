<?php

namespace Rezzza\Jobflow\Extension\ETL\Type\Extractor;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Rezzza\Jobflow\Extension\ETL\Type\ETLType;

class ExtractorType extends ETLType
{
    public function setInitOptions(OptionsResolverInterface $resolver)
    {
        parent::setInitOptions($resolver);

        $resolver->setDefaults(array(
            'etl_type' => self::TYPE_EXTRACTOR
        ));
    }

    public function setExecOptions(OptionsResolverInterface $resolver)
    {
        parent::setExecOptions($resolver);

        $resolver->setDefaults(array(
            'proxy_class' => 'Rezzza\Jobflow\Extension\ETL\Processor\ExtractorProxy',
            'offset' => 0,
        ));
    }

    public function getName()
    {
        return 'extractor';
    }
}
