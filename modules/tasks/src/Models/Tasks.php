<?php

namespace SON\Framework\Tasks\Models;

use \SON\Framework\Model;

class Tasks extends Model
{
    public function getByProjectID ($id)
    {
        $sql = 'SELECT tasks.* FROM tasks
            LEFT JOIN sections ON  tasks.section_id = sections.id
            WHERE sections.project_id=?';

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
