const express = require("express")
const router = express.Router()

const postsController = require("../controller/posts.controller")

router.get("/capteurs/all", postsController.getAll)
router.get("/users", postsController.get_users)
router.get("/users/connection/:username/:password", postsController.get_connection)
router.get("/capteurs/:id", postsController.getById)
router.get("/informations", postsController.get_informations)
router.post("/users/create", postsController.create)
router.put("/users/:id", postsController.update)
router.delete("/users/:id", postsController.delete_users)
router.delete("/capteurs/:id", postsController.delete_capteurs)


module.exports = router