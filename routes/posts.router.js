const express = require("express")
const router = express.Router()

const postsController = require("../controller/posts.controller")

router.get("/", postsController.getAll)
router.get("/users", postsController.get_users)
router.get("/:id", postsController.getById)
router.post("/", postsController.create)
router.put("/:id", postsController.update)
router.delete("/:id", postsController.delete_users)
router.delete("/capteurs/:id", postsController.delete_capteurs)


module.exports = router