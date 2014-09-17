<?php namespace HireMe\Repositories;

use HireMe\Entities\Candidate;

class CandidateRepo extends baseRepo{

	public function getModel(){
		return new Candidate;
	}
}