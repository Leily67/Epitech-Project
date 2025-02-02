class CreateObjet < ActiveRecord::Migration[7.0]
  def change
    create_table :objets do |t|
      t.string :name
      t.string :avatar
      t.string :obj_type
      t.integer :force
      t.integer :vie
      t.integer :xp

      t.timestamps
    end
  end
end
