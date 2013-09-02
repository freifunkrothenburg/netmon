<?php
	require_once(ROOT_DIR.'/lib/core/ObjectList.class.php');
	require_once(ROOT_DIR.'/lib/core/Networkinterface.class.php');

	class Networkinterfacelist extends ObjectList {
		private $networkinterfacelist = array();
		
		public function __construct($router_id=false, $offset=false, $limit=false, $sort_by=false, $order=false) {
			$result = array();
			if($offset!==false)
				$this->setOffset((int)$offset);
			if($limit!==false)
				$this->setLimit((int)$limit);
			if($sort_by!==false)
				$this->setSortBy($sort_by);
			if($order!==false)
				$this->SetOrder($order);
				
			if($router_id!=false) {
				// initialize $total_count with the total number of objects in the list (over all pages)
				try {
					$stmt = DB::getInstance()->prepare("SELECT COUNT(*) as total_count
														FROM interfaces
														WHERE interfaces.router_id=?");
					$stmt->execute(array($router_id));
					$total_count = $stmt->fetch(PDO::FETCH_ASSOC);
				} catch(PDOException $e) {
					echo $e->getMessage();
					echo $e->getTraceAsString();
				}
				$this->setTotalCount((int)$total_count['total_count']);
				//if limit -1 then get all interfaces
				if($this->getLimit()==-1)
					$this->setLimit($this->getTotalCount());
				
				try {
					$stmt = DB::getInstance()->prepare("SELECT interfaces.id as networkinterface_id
														FROM interfaces
														WHERE interfaces.router_id = :router_id
														ORDER BY
															case :sort_by
																when 'name' then interfaces.name
																else interfaces.id
															end
														".$this->getOrder()."
														LIMIT :offset, :limit");
					$stmt->bindParam(':router_id', $router_id, PDO::PARAM_INT);
					$stmt->bindParam(':offset', $this->getOffset(), PDO::PARAM_INT);
					$stmt->bindParam(':limit', $this->getLimit(), PDO::PARAM_INT);
					$stmt->bindParam(':sort_by', $this->getSortBy(), PDO::PARAM_STR);
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				} catch(PDOException $e) {
					echo $e->getMessage();
					echo $e->getTraceAsString();
				}
			} else {
				// initialize $total_count with the total number of objects in the list (over all pages)
				try {
					$stmt = DB::getInstance()->prepare("SELECT COUNT(*) as total_count
														FROM interfaces");
					$stmt->execute();
					$total_count = $stmt->fetch(PDO::FETCH_ASSOC);
				} catch(PDOException $e) {
					echo $e->getMessage();
					echo $e->getTraceAsString();
				}
				$this->setTotalCount((int)$total_count['total_count']);
				//if limit -1 then get all interfaces
				if($this->getLimit()==-1)
					$this->setLimit($this->getTotalCount());
			
				try {
					$stmt = DB::getInstance()->prepare("SELECT interfaces.id as networkinterface_id
														FROM interfaces
														ORDER BY
															case :sort_by
																when 'name' then interfaces.name
																else interfaces.id
															end
														".$this->getOrder()."
														LIMIT :offset, :limit");
					$stmt->bindParam(':offset', $this->getOffset(), PDO::PARAM_INT);
					$stmt->bindParam(':limit', $this->getLimit(), PDO::PARAM_INT);
					$stmt->bindParam(':sort_by', $this->getSortBy(), PDO::PARAM_STR);
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				} catch(PDOException $e) {
					echo $e->getMessage();
					echo $e->getTraceAsString();
				}
			}
			
			foreach($result as $networkinterface) {
				$networkinterface = new Networkinterface((int)$networkinterface['networkinterface_id']);
				$networkinterface->fetch();
				$this->networkinterfacelist[] = $networkinterface;
			}
		}
		
		public function getNetworkinterfacelist() {
			return $this->networkinterfacelist;
		}
		
		public function getDomXMLElement($domdocument) {
			$domxmlelement = $domdocument->createElement('networkinterfacelist');
			$domxmlelement->setAttribute("total_count", $this->getTotalCount());
			$domxmlelement->setAttribute("offset", $this->getOffset());
			$domxmlelement->setAttribute("limit", $this->getLimit());
			foreach($this->networkinterfacelist as $networkinterface) {
				$domxmlelement->appendChild($networkinterface->getDomXMLElement($domdocument));
			}

			return $domxmlelement;
		}
	}
?>