<?php
class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $this->root = $this->insertRec($this->root, $data);
    }

    private function insertRec($node, $data) {
        if ($node === null) {
            return new Node($data);
        }
        if ($data < $node->data) {
            $node->left = $this->insertRec($node->left, $data);
        } else {
            $node->right = $this->insertRec($node->right, $data);
        }
        return $node;
    }

    public function search($data) {
        return $this->searchRec($this->root, $data);
    }

    private function searchRec($node, $data) {
        if ($node === null) return false;
        if ($node->data === $data) return true;
        if ($data < $node->data) return $this->searchRec($node->left, $data);
        return $this->searchRec($node->right, $data);
    }

    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->data . "<br>";
            $this->inorderTraversal($node->right);
        }
    }
}

// Example Use:
$bst = new BinarySearchTree();
$books = [
    "Harry Potter", "The Hobbit", "A Brief History of Time",
    "Becoming", "Gone Girl", "Sherlock Holmes"
];
foreach ($books as $book) {
    $bst->insert($book);
}

echo "Inorder Traversal (Alphabetical):<br>";
$bst->inorderTraversal($bst->root);

echo "<br>Searching for 'The Hobbit': ";
echo $bst->search("The Hobbit") ? "Found!" : "Not Found.";

echo "<br>Searching for 'Inferno': ";
echo $bst->search("Inferno") ? "Found!" : "Not Found.";
?>
