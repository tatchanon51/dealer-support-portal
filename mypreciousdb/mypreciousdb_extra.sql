
--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_cost`
--
ALTER TABLE `activity_cost`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`dealer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_cost`
--
ALTER TABLE `activity_cost`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2010;
