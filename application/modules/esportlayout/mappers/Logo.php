<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Mappers;

use Modules\EsportLayout\Models\Logo as LogoModel;

class Logo extends \Ilch\Mapper
{
    public function getLogo()
    {
        $row = $this->db()->select('*')
            ->from('layout_esportlayout')
            ->execute()
            ->fetchAssoc();

        if (empty($row)) {
            $model = new LogoModel();
            $model->setId('');
            $model->setLogoUrl('');
            return $model;
        }

        $model = new LogoModel();
        $model->setId($row['id']);
        $model->setLogoUrl($row['logourl']);
        return $model;
    }

    public function save(LogoModel $entry)
    {
        $fields = array
        (
            'logourl' => $entry->getLogoUrl(),
        );

        $this->db()->update('layout_esportlayout')
            ->values($fields)
            ->execute();
    }
}
