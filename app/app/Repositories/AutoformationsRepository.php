<?php 
namespace App\Repositories ;
use App\Models\Autoformation;
use App\Repositories\BaseRepository;

class AutoformationsRepository extends BaseRepository
{
    
    public function __construct(Autoformation $autoformation){
        $this->model = $autoformation;
    }

    protected $fileldAutoformation = [
        'Titre' ,
        'description' 
    ];
    public function getFieldData():array {
        return $this->fileldAutoformation;
    }
    public function model():string {
        return Autoformation::class;
    }
  

    public function searchAutoformations($searchValue, $perPage = 4)
    {
      return $this->model
      ->where('Titre', 'LIKE', '%' . $searchValue . '%')
      ->orWhere('description', 'LIKE', '%' . $searchValue . '%')
      ->paginate($perPage);
    }
    
}