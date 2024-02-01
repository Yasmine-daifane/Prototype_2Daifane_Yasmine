<?php 
namespace App\Repositories ;
use App\Models\Chapitre;
use App\Repositories\BaseRepository;

class TasksRepository extends BaseRepository
{
    
    public function __construct(Chapitre $chapitre){
        $this->model = $chapitre;
    }

    protected $fileldChapitre = [
        'Titre',
        'description',
        'autoformation_id',
    ];
    public function getFieldData():array {
        return $this->fileldChapitre;
    }
    public function model():string {
        return Chapitre::class;
    }
 

   public function  getChapitrebyautoformationsId($autoformation_id){
    return $this->model->where('autoformation_id', $autoformation_id)->paginate(4);
     
   }

   public function searchTasks($searchChapitre)
    {
        $get_data =  $this->model->where(function ($query) use ($searchChapitre) {
            $query->where('Titre', 'like', '%' . $searchChapitre . '%')
                ->orWhere('description', 'like', '%' . $searchChapitre . '%');
        });

     

      
        return $get_data->paginate(4);

    
    }
 
}