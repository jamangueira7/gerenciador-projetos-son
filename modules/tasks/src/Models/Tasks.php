<?php

namespace SON\Framework\Tasks\Models;

use App\Models\Utils\UserFilterTrait;
use \SON\Framework\Model;

class Tasks extends Model
{
    use UserFilterTrait;

    public function getByProjectID ($id)
    {
        $sql = 'SELECT tasks.* FROM tasks
            LEFT JOIN sections ON  tasks.section_id = sections.id
            WHERE sections.project_id=? and tasks.user_id=?';

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id, $this->user_id]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete(array $conditions)
    {
        $conditions['user_id'] = $this->user_id;
        $conditions['assigned_to'] = $this->user_id;
        return parent::delete($conditions);
    }
}
