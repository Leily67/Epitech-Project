class CreateJoueur < ActiveRecord::Migration[7.0]
  def change
    create_table :joueurs do |t|
      t.string :name
      t.integer :niveau
      t.integer :force
      t.integer :vie
      t.integer :xp
      t.boolean :mort
      t.integer :points

      t.timestamps
    end
  end
end
