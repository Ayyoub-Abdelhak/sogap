<?php

class ISTRN_Record_Model extends Vtiger_Record_Model
{
	public function getRelatedInventoryProducts(): array
	{
		return (new \App\Db\Query())
			->select(['p.productname', 'i.qty'])
			->from(['i' => 'u_yf_istrn_inventory'])
			->innerJoin(['p' => 'vtiger_products'], 'p.productid = i.name')
			->where(['i.crmid' => $this->getId()])
			->orderBy(['i.seq' => SORT_ASC])
			->all();
	}
}
